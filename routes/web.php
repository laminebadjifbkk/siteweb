<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/inscription', [HomeController::class, 'inscription'])->name('inscription');
Route::get('/a-propos', [HomeController::class, 'apropos'])->name('a-propos');
Route::get('/poles-regionaux', [HomeController::class, 'polesregionaux'])->name('poles-regionaux');
Route::get('/missions', [HomeController::class, 'missions'])->name('missions');
Route::get('/documentation', [HomeController::class, 'documentation'])->name('documentation');
Route::get('/actualites', [HomeController::class, 'actualites'])->name('actualites');
Route::get('/operateurs', [HomeController::class, 'operateurs'])->name('operateurs');
Route::get('/formations', [HomeController::class, 'formations'])->name('formations');
Route::get('/marches-publics', [HomeController::class, 'marchespublics'])->name('marches-publics');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/certification', [HomeController::class, 'certification'])->name('certification');
Route::get('/entreprises', [HomeController::class, 'entreprises'])->name('entreprises');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::get('/admin', [DashboardController::class, 'index'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('articles', ArticleController::class)->only(['index', 'create', 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
