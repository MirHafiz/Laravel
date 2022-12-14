<?php

use App\Http\Controllers\AuthorController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
    
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::group(['middleware' => 'auth'], function () 
{
 
    Route::get('/home', [HomeController::class, 'index']);


    Route::resource(name:'authors',controller:\App\Http\Controllers\AuthorController::class);
    
    });




