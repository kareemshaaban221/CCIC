<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('/students')->name('students.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', action: [StudentController::class, 'create'])->name('create');
    Route::post('/store', action: [StudentController::class, 'store'])->name('store');
    Route::get('/edit/{student}', action: [StudentController::class, 'edit'])->name('edit');
    Route::post('/update/{student}', action: [StudentController::class, 'update'])->name('update');
    Route::get('/delete/{student}', action: [StudentController::class, 'destroy'])->name('destroy');
});

Route::prefix('/teachers')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('/create', action: [TeacherController::class, 'create'])->name('teachers.create');
    Route::get('/edit', action: [TeacherController::class, 'edit'])->name('teachers.edit');
});

Route::get('/logout', fn () => 'comming soon')->name('logout');
