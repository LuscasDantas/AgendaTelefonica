<?php

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

use App\Http\Controllers\ContatosController;

Route::get('/', [ContatosController::class, 'index']);

Route::post('/contacts/search', [ContatosController::class, 'search']);

Route::get('/create', [ContatosController::class, 'create']);
Route::post('/contacts', [ContatosController::class, 'store']);

Route::get('/edit/{id}', [ContatosController::class, 'edit']);
Route::put('/update/{id}', [ContatosController::class, 'update']);

Route::delete('/contacts/{id}', [ContatosController::class, 'destroy']);
Route::any('/download-pdf', [ContatosController::class, 'downloadPDF']);
