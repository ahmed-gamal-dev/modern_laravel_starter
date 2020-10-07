<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Notifications\InvoicePaid;
use Illuminate\Notifications\Notifiable;
use App\Models\Invoice;

use Symfony\Component\HttpFoundation\Response;

class MailController extends Controller {
/*
* just for testing email send	
*/
	 public function sendTestEmail() {
		/*
		* send invoice notify to user that is related to this invoice 
		*/
		
		// for test send variables
		$first = 'this is first';
		$second='this is second';
		
	    $invoice = \App\Models\Invoice::first(); // random query
		$notify = $invoice->sendInvoiceNotification();  
				return dd($notify);
       /* return response()->json([
            'message' => 'Congratulation ^_^ Invoice Email has been sent Successfully ,,',
            ], 200); */
    }


}