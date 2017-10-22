<?php

namespace App\Http\Controllers;

use App\NiceActionLog;

class HomeController extends Controller {

    public function home(){
        $logged_actions = NiceActionLog::all();
        return view('home', ['logged_actions' => $logged_actions]);
    }

}