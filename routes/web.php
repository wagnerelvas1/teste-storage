<?php

use App\Modules\Storage\StorageController;
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

Route::get('/', [StorageController::class, 'index']);

Route::post('/create/directory', [StorageController::class, 'createDirectory'])->name('criaDiretorio');
Route::post('/create/file', [StorageController::class, 'createFile'])->name('enviaArquivo');




