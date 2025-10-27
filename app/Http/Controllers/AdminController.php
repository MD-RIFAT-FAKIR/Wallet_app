<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //admin login form
    public function index() {
        return view('admin.admin_login');
    }
}
