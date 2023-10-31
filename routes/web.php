<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("school",[SchoolController::class])->name("school.index");
Route::post("school/edit",[SchoolController::class,"edit"])->name("school.edit");
Route::delete("school/delete",[SchoolController::class,"delete"])->name("school.delete");

Route::get("student",[StudentController::class])->name("student.index");
Route::post("student/edit",[SchoolController::class,"edit"])->name("student.edit");
Route::delete("student/delete",[SchoolController::class,"delete"])->name("student.delete");


require __DIR__.'/auth.php';
