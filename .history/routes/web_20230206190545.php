<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasseController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ClasseController::class, 'index']);

Route::get('/nouvelle-classe', [ClasseController::class, 'create'])->name('classe.create');
Route::post('/nouvelle-classe', [ClasseController::class, 'store'])->name('classe.store');
