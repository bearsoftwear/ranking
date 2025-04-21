<?php

use App\Http\Controllers\RankingController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::get('/rankings', [RankingController::class, 'index'])->name('rankings.index');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

// todo: ranking view
// todo: export import excel https://www.malasngoding.com/import-excel-laravel/
// todo: email https://www.youtube.com/watch?v=dSAgs6cnWpc&ab_channel=WebArtisan101 -- fail
// todo: deploy https://www.youtube.com/watch?v=yhH-Y91pbQU&ab_channel=KahfieIDN
// todo: buat submenu sidebar https://ui.shadcn.com/docs/components/sidebar#collapsible-sidebarmenu
// todo: database sqlite to mysql
