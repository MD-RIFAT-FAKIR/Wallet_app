<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

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

    //admin register store
    public function adminRegisterStore(Request $request) {

        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);

        Admin::insert([
            'name' => $request->name,
            'email' => $request->email ,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.login.form')->with('success', 'Admin Register Successfully');

    }

    //admin dashboard
    public function AdminDashboard() {
        return view('admin.dashboard.index');
    }

    //admin logout
    public function adminLogout() {
        
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login.form')->with('success', 'Admin Logout Successfully');
    }
}


