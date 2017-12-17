<?php

namespace App\Mail;

use App\User as User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $client = null;
    public $subject = '';
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user,$subject)
    {
      //  $this->client = $client;
        $this->user = $user;
        $this->subject = $subject;
    }
    // public function __construct($subject, $client)
    // {
    //     $this->client = $client;
    //     $this->subject = $subject;
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("mg.unitedspiritcampus@godaddy.com")->subject($this->subject)->view('emails.confirmation');
    }
}
