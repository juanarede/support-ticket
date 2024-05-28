<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterAgentUserController;
use App\Http\Controllers\RegisterExternalUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/register/externalUser', [RegisterExternalUserController::class, 'register'])->name('register.externalUser');

Route::get('/register/agentUser', [RegisterAgentUserController::class, 'register'])->name('register.agentUser');
