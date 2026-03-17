<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HostController;
use App\Http\Controllers\LogementController;
use App\Http\Controllers\ReservationController;
Route::get('content', function () {
    return view('pages.content');
})->name('content');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('/devenir-hote', [HostController::class, 'create'])->name('pages.create');
Route::post('/devenir-hote', [HostController::class, 'store'])->name('pages.store');

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['fr', 'en', 'ar'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');
Route::get('/logement/{id}', [LogementController::class, 'show'])->name('logement.show');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

Route::get('/marrakech' , function(){
    return view('villes.marakech');
})->name('marrakech');