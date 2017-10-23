<?php

namespace App\Listeners;

use App\ActionLog;
use App\Events\ActionCreated;

class CreateActionListener
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
        $action = $event->action;
        $action_log = new ActionLog();
        $action_log->action_name = $action->name;
        $action_log->save();
    }
}
