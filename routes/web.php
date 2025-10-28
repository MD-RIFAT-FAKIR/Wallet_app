<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* ---------------Admin Routes------------ */
Route::prefix('admin')->group(function() {
    //admin login form
    Route::get('/login', [AdminController::class, 'index'])->name('admin.login.form');
    //admin login
    Route::post('/login/owner', [AdminController::class, 'adminLogin'])->name('admin.login');
    //admin register form
    Route::get('/register', [AdminController::class, 'adminRegisterForm'])->name('admin.register.form');
    //admin register store
    Route::post('/register/store', [AdminController::class, 'adminRegisterStore'])->name('admin.register.store');
    //admin dashboard
    Route::get('/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard')->middleware('admin');
    //admin logout
    Route::get('/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
});
/* ---------------End Admin Routes------------ */


/*-----------agent all route------------*/
Route::prefix('/agent')->group(function() {
    //agent login form
    Route::get('/login', [AgentController::class, 'index'])->name('agent.login.form');
    //agent login
    Route::post('/login/owner', [AgentController::class, 'agentLogin'])->name('agent.login');
    //agent register form
    Route::get('/register', [AgentController::class, 'agentRegisterForm'])->name('agent.register.form');
     //agent register store
    Route::post('/register/store', [AgentController::class, 'agentRegisterStore'])->name('agent.register.store');



});


/*----------endagent all route----------*/





Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
