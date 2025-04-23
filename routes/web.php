<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::resource('schools', SchoolController::class);
    Route::resource('grades', GradeController::class); // nilai
    Route::resource('subjects', SubjectController::class);

    Route::resource('students', StudentController::class);
    Route::post('students/import', [StudentController::class, 'import_excel'])->name('student.import_excel');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

// todo: view table
// todo: ranking view
// todo: export import excel https://www.malasngoding.com/import-excel-laravel/
// todo: email https://www.youtube.com/watch?v=dSAgs6cnWpc&ab_channel=WebArtisan101 -- fail
// todo: deploy https://www.youtube.com/watch?v=yhH-Y91pbQU&ab_channel=KahfieIDN
// todo: database sqlite to mysql
