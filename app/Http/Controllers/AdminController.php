<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;


class AdminController extends Controller
{
    //admin login form
    public function index() {
        return view('admin.admin_login');
    }

    //admin login
    public function adminLogin(Request $request) {
        // dd($request->all());
        $check = $request->all();

        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password'] ])) {
            return redirect()->route('admin.dashboard')->with('success', 'Admin Login Successfully.');
        }else{
            return back()->with('error', 'Invalid Name Or Password !');
        }
    }// end admin login

    //admin register form
    public function adminRegisterForm() {
        return view('admin.admin_register');
    }

    //admin dashboard
    public function AdminDashboard() {
        return view('admin.dashboard.index');
    }
}


