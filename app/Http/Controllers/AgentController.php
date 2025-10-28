<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


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

    //agent register form setup
    public function agentRegisterForm() {
        return view('agent.agent_register');
    }

    //agent register store
    public function agentRegisterStore(Request $request) {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);

        Agent::insert([
            'name' => $request->name,
            'email' => $request->email ,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('agent.login.form')->with('success', 'Admin Register Successfully');
    } //end 

    //agent dashboard 
    public function agentDashboard() {
        return view('agent.dashboard.index');
    }

    //agent logout
    public function agentLogout() {

        Auth::guard('agent')->logout();

        return redirect()->route('agent.login.form')->with('success', 'Agent Logout Successfully');
    }




}
