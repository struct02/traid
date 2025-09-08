<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\BusinessAdvertiseController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/signin', function(){

// return view('signin');

// });

Route::get('/signup', function(){

return view('signup');

});

Route::get('/main', function(){

return view('main');

});

;

//search functionality

  

Route::get('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
});


Route::controller(SocialiteController::class)->group(function() {
    Route::get('auth/google', 'googleLogin')->name('auth.google');

    Route::get('auth/google-callback', 'googleAuthentication')->name('auth.google-callback');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/advertise', function () {
    return view('advertise');
})->middleware(['auth', 'verified'])->name('advertise');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //Posting Business Ads
    Route::post('/advertise', [BusinessAdvertiseController::class, 'store'])->name('ad.create');
    Route::get('/list-advertise', [BusinessAdvertiseController::class, 'show'])->name('ad.show');

    Route::get('/search', [BusinessAdvertiseController::class, 'index'])->name('search');


     Route::get('/create', [ProductController::class, 'create'])->name('create');
    
});

require __DIR__.'/auth.php';
