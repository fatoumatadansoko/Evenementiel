<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sidebar', function () {
    return view('layouts.sidebarAssociation');
});

Route::get('/dashboard',[AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


use App\Http\Controllers\EvenementController;

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'registerUser'])->name('registerUser');

require __DIR__.'/auth.php';

Route::resource('reservation', ReservationController::class);
Route::resource('evenements', EvenementController::class); // Exclure l'index des idées pour éviter la redondance
Route::get('liste', [EvenementController::class, 'liste']); // Exclure l'index des idées pour éviter la redondance
Route::resource('associations', AssociationController::class);

Route::get('/preview-layout', function () {
    return view('layouts.footer')->with('content', '');
});

Route::controller(TesteController::class)->group(function () {
      Route::get('/liste_events_Ass','liste');
      Route::get('/liste_reserve_User','liste_reserve');
      Route::get('/liste_association_Admin','liste_association');
      Route::get('/liste_user_Ass','liste_user');
});
