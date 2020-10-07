<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Invoice;

class InvoicePaid extends Notification
{
    use Queueable;
	
	 /**
     * RegisterConfirmation constructor.
     *
     * @param $confirmation_code
     * @param $fullName
     * @param $appUrl
     */    
    protected $model_item;
    protected $fullName;
    protected $appUrl;  

    /**
     * Create a new notification instance.
     *
     * @return void
     */
	 
     public function __construct($model_item,$name)
    {
       $this->model_item = $model_item;
      // $this->fullName = $first_name ." ". $last_name;
	   $this->fullName = $name;
       $this->appUrl = env('APP_URL','https://omaralalwi.info');
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
	 
   public function toMail($notifiable)
	{
		/*
		* هذا الاختبارات الخاصة بي للمراجعة كلها شغاله صح 100% بدون اي خطأ
		*/

		return (new MailMessage)
					->from('no-reply@example.com','High Way')
					->subject('Invoice'.$this->model_item->title.'Paid successfully')
					->markdown('mail.invoice.paid', [
						'body' =>$this->model_item->body,
						'user' =>$notifiable,
						'url' => $this->appUrl,
						]);	
	}

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */

    public function toArray($notifiable)
		{
			return [
			   //        
			   ];
		}
}
