<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\User;
use App\Notifications\InvoicePaid;

class Invoice extends Model
{
  use HasFactory, Notifiable;
	
	protected $fillable = [
	    'title',
        'body',
        'user_id',
	   ];
	   
    protected $casts = [
        'created_at' => 'datetime',
    ];

   public function user() {
      return $this->belongsTo(User::class);
     }	

	public function sendInvoiceNotification()
	   {
		 /*
		  * send invoice notify to user that is related to this invoice 
		 */
		$this->user->notify(new InvoicePaid($this,$this->user->name));
	  }		 
	   
}
