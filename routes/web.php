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


Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', [StudentController::class, 'index'])->name('student.index');
Route::get('/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/task/{id}/destroy', [TaskController::class, 'destroy'])->name('task.destroy');
Route::get('/show/{id}', [StudentController::class, 'show'])->name('student.show');

