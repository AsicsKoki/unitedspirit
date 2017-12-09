<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $client = null;
    public $subject = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($subject, $client)
     {
         $this->client = $client;
         $this->subject = $subject;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->view('emails.reset-password');
    }
}
