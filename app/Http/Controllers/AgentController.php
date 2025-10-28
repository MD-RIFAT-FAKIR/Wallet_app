<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use Auth;

class AgentController extends Controller
{
    //agent login form
    public function index() {
        return view('agent.agent_login');
    }

    //agent login 
    public function agentLogin(Request $request) {
        // dd($request->all());

        $check = $request->all();

        if(Auth::guard('agent')->attempt(['email' => $check['email'], 'password' => $check['password'] ])) {
            return redirect()->route('agent.dashboard')->with('seccess', 'Agent Login Successfully');
        }else{
            return redirect()->route('agent.login.form')->with('error', 'Invalid Email or Password');
        }

    }//end agent login 

    public function agentRegisterForm() {
        return view('agent.agent_register');
    }
}
