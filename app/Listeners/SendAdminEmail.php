<?php

namespace App\Listeners;

use App\Events\SendEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendAdminEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
        $url = config('app.url');
        \Mail::to(variable('mail_from_address'))->send(new \App\Mail\SendAdminEmail('Пользователь оставил сообщение на сайте '.$url));
    }
}
