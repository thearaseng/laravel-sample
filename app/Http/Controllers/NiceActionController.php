<?php

namespace App\Http\Controllers;

use App\NiceAction;
use App\NiceActionLog;
use Illuminate\Http\Request;

class NiceActionController extends Controller {

    public function getNiceAction($action, $name = null){
        $the_action = NiceAction::where('name', $action)->first();
        $action_log = new NiceActionLog();
        $the_action->logged_actions()->save($action_log);
        return view('handle-action', ['name' => $name, 'action' => $the_action]);
    }

    public function postNiceAction(Request $request){
        $this->validate($request, [
            'name' => 'required|alpha|unique:nice_actions'
        ]);
        $action = new NiceAction();
        $action->name = $request['name'];
        $action->niceness = 5;
        $action->save();
        return redirect()->route('getAllNiceActions');
    }

    public function getAllNiceActions(){
        $actions = NiceAction::all();
        return view('action-list', ['actions' => $actions]);
    }

}