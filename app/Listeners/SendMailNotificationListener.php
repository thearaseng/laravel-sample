<?php

namespace App\Listeners;

use App\Events\ActionCreated;
use App\Mail\Notification;
use Illuminate\Support\Facades\Mail;

class SendMailNotificationListener
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
     * @param  ActionCreated  $event
     * @return void
     */
    public function handle(ActionCreated $event)
    {
        $email = $event->email;
        $author = 'Laravel';

        /*Mail::send('email/notification', ['user_name' => $author], function ($message) use ($email, $author){
            $message->from('admin@laravel.com', 'Admin');
            $message->to($email, $author);
            $message->subject('Thank you for using our service!');
        });*/

        Mail::to('seng.theara.kh@gmail.com')->send(new Notification($event->action));

    }
}
