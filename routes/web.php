<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\BranchController;

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


Route::group(['middleware' => 'auth'], function () {
        Route::get('/business/add/form', function () {
            return view('/business/form');
        })->name('business_form');
        Route::post('/business/add', [BusinessController::class, 'store'])->name('business_store');
    });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/business', [BusinessController::class, 'index'])->name('business');
Route::get('/business/data', [BusinessController::class, 'getBusinessdata']);
Route::get('/business/view/{id}', [BusinessController::class, 'view'])->name('business_view');
