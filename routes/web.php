<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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


Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/export_excel', [SiswaController::class, 'export_excel']);
Route::post('/siswa/import_excel', [SiswaController::class, 'import_excel'])->name('siswa.import_excel');