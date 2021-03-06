<?php

use App\Http\Controllers\customer\AboutController;
use App\Http\Controllers\customer\BlogController;
use App\Http\Controllers\customer\ContactsController;
use App\Http\Controllers\customer\ServicesController;
use App\Http\Controllers\customer\TeamController;
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



Route::name('customer.')->group( function() {
    Route::get('/', function () {
        return view('customer.index');
    })
    ->name('home');
    Route::get('/services',[ServicesController::class,'index'])
    ->name('services');
    Route::get('/about',[AboutController::class,'index'])
    ->name('about');
    Route::get('/team',[TeamController::class,'index'])
    ->name('team');
    Route::get('/contacts',[ContactsController::class,'index'])
    ->name('contacts');
    Route::get('/blog',[BlogController::class,'index'])
    ->name('blog');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
