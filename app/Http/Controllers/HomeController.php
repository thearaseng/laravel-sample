<?php

namespace App\Http\Controllers;

use App\NiceActionLog;
use DB;

class HomeController extends Controller {

    public function home(){
        $logged_actions = NiceActionLog::paginate(3);
        $query = DB::table('nice_action_logs')
            ->join('nice_actions', 'nice_action_logs.nice_action_id', '=', 'nice_actions.id')
            ->get();
        return view('home', ['logged_actions' => $logged_actions, 'query' => $query]);
    }

}