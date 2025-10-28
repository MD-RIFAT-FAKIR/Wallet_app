<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    //agent login form
    public function index() {
        return view('agent.agent_login');
    }
}
