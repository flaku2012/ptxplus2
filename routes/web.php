<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TicketsController;


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
    return view('welcome');
});

Route::prefix('tickets')->group(function () {
    
    Route::get( 'show', [TicketsController::class , 'index'] );
    Route::get( 'add', [TicketsController::class , 'create'] );
    Route::post( 'add', [TicketsController::class , 'store'] );
    Route::delete( 'delete/{id}', [TicketsController::class , 'destroy'] );

});

//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
