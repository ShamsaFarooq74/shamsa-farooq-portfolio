<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;

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


Route::get('/',  [HomeController::class, 'index']);

Route::resource('/admin', AdminController::class);
Route::middleware(['auth'])->group(function () {
Route::resource('user', CustomerController::class);
Route::resource('service', ServiceController::class);

Route::resource('project', ProjectController::class);

Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
});
require __DIR__.'/auth.php';


Route::get('/home', [HomeController::class, 'index']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('service-detail/{id}', [HomeController::class, 'serviceDetail'])->name('servicesDetail');
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('project-detail/{id}', [HomeController::class, 'projectDetail'])->name('projectDetail');
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/store', [HomeController::class, 'store'])->name('customer.store');


