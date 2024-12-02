<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OauthClientsController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('clients')->name('clients.')->group(function(){
    Route::get('/',[OauthClientsController::class,'index'])->name('index');
    Route::get('/create',[OauthClientsController::class,'create'])->name('create');
    Route::post('/create',[OauthClientsController::class,'store']);
    Route::get('/edit/{client}',[OauthClientsController::class,'edit'])->name('edit');
    Route::post('/edit/{client}',[OauthClientsController::class,'update']);
    Route::get('/delete/{client}',[OauthClientsController::class,'destroy'])->name('destroy');
});