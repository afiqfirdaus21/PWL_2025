<?php

use Illuminate\Support\Facades\Route; // Import Route
use App\Http\Controllers\ItemController; // Import ItemController

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

Route::get('/', function () { // Route / untuk mengembalikan view welcome
    return view('welcome');
});

Route::resource('items', ItemController::class); // Route /items untuk mengelola item yang berisikan create, store, show, edit, update, dan destroy