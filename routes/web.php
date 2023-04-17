<?php

use App\Http\Controllers\Teste\SupportController;
use App\Http\Controllers\Teste\TesteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/teste', [TesteController::class, 'teste']);

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
