<?php

use App\Http\Controllers\ProfileController;
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
Route::middleware('web')->group(function () {
    // Home routes
    Route::view('/', 'home')->name('home');
    Route::view('/home', 'home');
    Route::view('/homepage', 'home');
    
    // Main pages
    Route::view('/about', 'about')->name('about');
    Route::view('/contact', 'contact')->name('contact');
    Route::view('/appointments', 'appointments')->name('appointments');
    Route::view('/portal', 'portal')->name('portal');
    
    // Services group
    Route::prefix('services')->group(function () {
        Route::view('/', 'services')->name('services');
        Route::view('/ent', 'services.ent')->name('services.ent');
        Route::view('/eye', 'services.eye')->name('services.eye');
        Route::view('/generalmedicine', 'services.general')->name('services.general');
        Route::view('/geriatric', 'services.geriatric')->name('services.geriatric');
        Route::view('/obstetrics', 'services.obstetrics')->name('services.obstetrics');
        Route::view('/surgery', 'services.surgery')->name('services.surgery');
        Route::view('/pharmacy', 'services.pharmacy')->name('services.pharmacy');
        Route::view('/laboratory', 'services.laboratory')->name('services.laboratory');
        Route::view('/ultrasound', 'services.ultrasound')->name('services.ultrasound');
    });
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
