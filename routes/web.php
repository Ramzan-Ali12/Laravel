<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::resource('/Student',StudentController::class);
Route::get('/Student/create', [StudentController::class, 'create']);
Route::get('/Student/simple', [StudentController::class, 'simple']);
Route::post('/Student/store', [StudentController::class, 'store']);
Route::get('/student/{id}', [StudentController::class,'show']);
Route::get('/student/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('student/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');


