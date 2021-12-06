<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
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

Route::prefix('notes')->group(function (){
    Route::get('/',[NoteController::class,"index"])->name("notes.list");
    Route::get('/create',[NoteController::class,"create"])->name("notes.create");
    Route::post('/create',[NoteController::class,"store"])->name("notes.store");
    Route::get('/{id}/detail',[NoteController::class,"show"])->name("notes.detail");
    Route::get('/{id}/update',[NoteController::class,"edit"])->name("notes.edit");
    Route::post('/{id}/update',[NoteController::class,"update"])->name("notes.update");
    Route::get('/{id}/delete',[NoteController::class,"destroy"])->name("notes.delete");
});

Route::prefix('categories')->group(function() {
    Route::get('/',[CategoryController::class,"index"])->name("categories.list");
    Route::get('/create',[CategoryController::class,"create"])->name("categories.create");
    Route::post('/create',[CategoryController::class,"store"])->name("categories.store");
    Route::get('/{id}/detail',[CategoryController::class,"show"])->name("categories.detail");
    Route::get('/{id}/update',[CategoryController::class,"edit"])->name("categories.edit");
    Route::post('/{id}/update',[CategoryController::class,"update"])->name("categories.update");
    Route::get('/{id}/delete',[CategoryController::class,"destroy"])->name("categories.delete");
});

Route::prefix('users')->group(function () {
    Route::get('/',[UserController::class,"index"])->name("users.list");
});

Route::get('/',[AuthController::class,"showFormLogin"])->name("admin.showFormLogin");
Route::post('/login',[AuthController::class,"login"])->name("admin.login");
Route::get('/logout',[AuthController::class,"logout"])->name("admin.logout");


Route::get('/register',[AuthController::class,"showFormRegister"])->name("admin.showFormRegister");
Route::post('/register',[AuthController::class,"register"])->name("admin.register");





