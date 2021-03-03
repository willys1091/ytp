<?php

namespace App\Mail;

use App\Models\Charity;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificationSuccessMail extends Mailable
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
        return $this->subject('[Tangan Pengharapan] Donation Success for #'.$this->charity->donation_id)
                    // ->replyTo($this->booking->property->email, $this->booking->property->name)
                    ->view('email.payment_success')
                    ->with([
                        'charity' => $this->charity
                    ]);
    }
}
