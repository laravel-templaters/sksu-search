<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJsController;
use App\Http\Livewire\Comps\Transactions;
use App\Http\Livewire\Deph\IncomingReq;
use App\Http\Livewire\Deph\PendingReq;
use App\Http\Livewire\Deph\ViewDv;
use App\Http\Livewire\Deph\ReturnedReq;
use App\Http\Livewire\Secretariat\Dash;
use App\Http\Livewire\Secretariat\CreateDv;
use App\Http\Livewire\Aui\ManageUsers;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/profile',function(){
    return view('userprofile');
});

// Route::get('/transactions', function () {
//     return view('transaction');
// });

Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->get('/documents-tray', function () {
    return view('docu-tray');
})->name('docu-tray');


Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->get('/transactions', function () {
    return view('transaction');
})->name('transaction');


Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->get('/reports', function () {
    return view('report');
})->name('report');

Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->get('/register', function () {
    return view('register');
})->name('register');

Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->get('/admin/manageusers', ManageUsers::class);

Route::get('/dh/incoming', IncomingReq::class);
Route::get('/dh/pending', PendingReq::class);
Route::get('/dh/returns', ReturnedReq::class);
Route::get('/dh/view', ViewDv::class);


//delete lng ni gab kung mag route ka na liwat
//Route::get('/admin/manageusers', ManageUsers::class);

// Route::get('/sec/dashboard', Dash::class);
Route::get('/sec/newvoucher', CreateDv::class);

//Route::get('dashboard', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//Route::get('/sec/dashboard', [HomeController::class, 'index'])->name('sec.home');
//asta dri --^

Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');

 Route::middleware(['auth:sanctum', 'verified'])->get('/sec/dashboard', function () {
    return view('sec.dashboard-wrapper');
})->name('secretariat');

Route::middleware(['auth:sanctum', 'verified'])->get('/dh/incoming', function () {
    return view('dh.dashboard-wrapper');
})->name('department-head');

 Route::get('redirects', 'App\Http\Controllers\HomeController@index');





Route::get('chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');