<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\MyCartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/main', [MainController::class, 'main']);
Route::get('/admin', [AdminController::class, 'show']);
Route::get("/manageAdmin", [AdminController::class, "manageAdmin"]);
Route::get("/manageCategory", [AdminController::class, "manageCategory"]);
Route::get("/manageFood", [AdminController::class, "manageFood"]);
Route::get("/manageOrder", [AdminController::class, "manageOrder"]);
Route::get("/MyCart", [MyCartController::class, "MyCart"]);
Route::post("/storeOrder", [MyCartController::class, "store"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
