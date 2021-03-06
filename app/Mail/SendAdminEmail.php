<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendAdminEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $text;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($text, $event)
    {
        //
        $this->text = $text;
        $this->data = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(variable('mail_from_address'), variable('mail_from_name'))->view('email.email');
    }
}
