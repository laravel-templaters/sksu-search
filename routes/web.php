<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJsController;
use App\Http\Livewire\Comps\Transactions;
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
    
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');