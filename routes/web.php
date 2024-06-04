<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormTicketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterAgentUserController;
use App\Http\Controllers\RegisterExternalUserController;
use App\Http\Controllers\SelectCardTicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/selectCardTicket', [SelectCardTicketController::class, 'index'])->name('selectCardTicket');
Route::get('/selectCardTicket/{ticketId}', [SelectCardTicketController::class, 'getTicketURL']);

Route::get('/formTicket', [FormTicketController::class, 'index'])->name('formTicket');



Route::get('/register/externalUser', [RegisterExternalUserController::class, 'register'])->name('register.externalUser');
Route::post('/register/externalUser', [RegisterExternalUserController::class, 'store'])->name('register.externalUser.store');
// Route::get('/login/externalUser', [RegisterExternalUserController::class, 'showLoginForm'])->name('login.externalUser');
// Route::post('/login/externalUser', [RegisterExternalUserController::class, 'login'])->name('login.externalUser.submit');

Route::get('/register/agentUser', [RegisterAgentUserController::class, 'register'])->name('register.agentUser');
Route::post('/register/agentUser', [RegisterAgentUserController::class, 'store'])->name('register.agentUser.store');
// Route::get('/login/agentUser', [RegisterAgentUserController::class, 'showLoginForm'])->name('login.agentUser');
// Route::post('/login/agentUser', [RegisterAgentUserController::class, 'login'])->name('login.agentUser.submit');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
