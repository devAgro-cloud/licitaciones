<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Bid\BidController;
use App\Http\Controllers\Evaluation\EvaluationController;
use App\Http\Controllers\Award\AwardController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Settings\SettingsController;;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//! se debe aplicar middleware de autenticacion a todas las rutas


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/bids')->group(function () {
    Route::get('/', [BidController::class, 'index'])->name('bids');
    Route::get('/create', [BidController::class, 'create'])->name('bids.create');
    Route::get('/show/{id}', [BidController::class, 'show'])->name('bids.show');
});

Route::prefix('/evaluations')->group(function () {
    Route::get('/', [EvaluationController::class, 'index'])->name('evaluations');
});

Route::prefix('/awards')->group(function () {
    Route::get('/', [AwardController::class, 'index'])->name('awards');
});

Route::prefix('/users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users');
    Route::get('/data', [UserController::class, 'getData'])->name('users.data');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::prefix('/settings')->group(function () {
    Route::get('/', [SettingsController::class, 'index'])->name('settings');
    Route::get('/profile', [SettingsController::class, 'profile'])->name('settings.profile');
    Route::get('/notification', [SettingsController::class, 'notification'])->name('settings.notification');
    Route::get('/system', [SettingsController::class, 'system'])->name('settings.system');
});
