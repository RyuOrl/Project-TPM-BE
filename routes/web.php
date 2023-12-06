<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function(){
    return redirect('/home');
});

Route::get('/home', [TaskController::class, 'home'])->name('task.home');

Route::get('/add', [TaskController::class, 'create']);

Route::post('/home', [TaskController::class, 'store'])->name('task.store');