<?php
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::get('/views/Student', function () {
    return view('welcome');
});

Route::get('/teachers', [TeacherController::class, 'index']);
Route::get('/subjects', [SubjectController::class, 'index']);


