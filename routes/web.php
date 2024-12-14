<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Jobs\TranslateJob;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('test', function() {
    $job = Job::first();
    TranslateJob::dispatch($job);
    return 'done';
});

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::resource('/jobs', JobController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
