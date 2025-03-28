<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::resource('students', StudentController::class);
Route::get('students/search', [StudentController::class, 'search'])->name('students.search');


Route::get('/', function () {
    return view('home');
});
