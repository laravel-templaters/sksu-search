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


Route::get('/transactions', function () {
    return view('transaction');
});

Route::get('/documents-tray', function () {
    return view('docu-tray');
});

Route::get('/reports', function () {
    return view('report');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dh/incoming', IncomingReq::class);
Route::get('/dh/pending', PendingReq::class);
Route::get('/dh/returns', ReturnedReq::class);
Route::get('/dh/view', ViewDv::class);


//delete lng ni gab kung mag route ka na liwat
// Route::get('/sec/dashboard', Dash::class);
// Route::get('/sec/newvoucher', CreateDv::class);

//Route::get('dashboard', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//Route::get('/sec/dashboard', [HomeController::class, 'index'])->name('sec.home');
//asta dri --^

 Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');

 Route::middleware(['auth:sanctum', 'verified', 'role:sec'])->get('/sec/dashboard', function () {
    return view('livewire.secretariat.dash');
})->name('secretariat');

 Route::get('redirects', 'App\Http\Controllers\HomeController@index');





Route::get('chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');