<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;

use App\Http\Livewire\Organizations;
use App\Http\Livewire\Departments;
use App\Http\Livewire\Newdepartment;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Holidays;
use App\Http\Livewire\Newholiday;
use App\Http\Livewire\Leaves;
use App\Http\Livewire\Newleave;

use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\UserManagement;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Login::class)->name('login');

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
 
Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/organization', Organizations::class)->name('organization');
    Route::get('/departments', Departments::class)->name('departments');
    Route::get('/new-department', Newdepartment::class)->name('create-department');
    Route::get('/holidays', Holidays::class)->name('holidays');
    Route::get('/new-holiday', Newholiday::class)->name('create-holiday');
    Route::get('/leaves', Leaves::class)->name('leave-types');
    Route::get('/new-leave', Newleave::class)->name('create-leave');
    Route::get('/user-management', UserManagement::class)->name('user-management');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    
});

