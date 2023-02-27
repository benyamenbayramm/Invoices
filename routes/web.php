<?php

use App\Http\Controllers\InvoicesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

// Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('invoices', App\Http\Controllers\InvoicesController::class);
Route::resource('sections', App\Http\Controllers\SectionsController::class);
// Route::middleware(['auth'])->group(function () {
//     Route::resource('invoices', App\Http\Controllers\InvoicesController::class);
// });

Route::get('/{page}', 'App\Http\Controllers\AdminController@index');
