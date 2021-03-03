<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificationFailedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $charity;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Charity $charity)
    {
        $this->charity = $charity;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('[Tangan Pengharapan] Donation Failed for #'.$this->charity->donation_id)
                    // ->replyTo($this->booking->property->email, $this->booking->property->name)
                    ->view('email.payment_error')
                    ->with([
                        'charity' => $this->charity
                    ]);
    }
}
