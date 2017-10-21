<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceActionController extends Controller {

    public function getNiceAction($action, $name = null){
        return view('handle-action', ['name' => $name, 'action' => $action]);
    }

    public function postNiceAction(Request $request){
        $this->validate($request, [
            'username' => 'required|alpha'
        ]);
        return view('handle-action', ['name' => $request['username'], 'action' => 'post action']);
    }

}