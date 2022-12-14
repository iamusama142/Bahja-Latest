<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $orderData;
    public $cartDetails;
    public $shipping;
    public $totalAmunt;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($orderData,$cartDetails,$shipping,$totalAmunt)
    {
        $this->orderData = $orderData;
        $this->cartDetails = $cartDetails;
        $this->shipping = $shipping;
        $this->totalAmunt = $totalAmunt;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    
    public function build()
    {
        
        return $this->subject('BAHJA - YOUR ORDER DETAILS')->view('mail.user_mail');
    }
}
