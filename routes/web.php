<?php

use Illuminate\Support\Facades\Route;
use KFoobar\Flight\Http\Controllers\Flight\Dashboard\DashboardController;
use KFoobar\Flight\Http\Controllers\Flight\Invite\InviteController;
use KFoobar\Flight\Http\Controllers\Flight\Profile\ProfileController;
use KFoobar\Flight\Http\Controllers\Flight\Profile\SecurityController;
use KFoobar\Flight\Http\Controllers\Flight\Terms\TermsController;
use KFoobar\Flight\Http\Controllers\Flight\User\RoleController;
use KFoobar\Flight\Http\Controllers\Flight\User\TeamController;
use KFoobar\Flight\Http\Controllers\Flight\User\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['web'])->group(function () {
    Route::redirect('/', 'login');
    Route::redirect('home', 'dashboard');

    Route::group(['middleware' => ['guest']], function () {
        Route::get('invites/{user:uuid}', [InviteController::class, 'form'])->name('invite');
        Route::post('invites/{user:uuid}', [InviteController::class, 'update'])->name('invite.update');
    });

    Route::group(['middleware' => ['auth', 'verified']], function () {
        Route::prefix('profile')->group(function () {
            Route::get('/', [ProfileController::class, 'profile'])->name('profile');
            Route::get('password', [SecurityController::class, 'password'])->name('profile.password');

            Route::group(['middleware' => ['password.confirm']], function () {
                Route::get('two-factor', [SecurityController::class, 'twofactor'])->name('profile.two-factor');
                Route::get('two-factor/codes', [SecurityController::class, 'backup'])->name('profile.two-factor.codes');
            });
        });

        Route::prefix('users')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('users');
            Route::get('{user:uuid}', [UserController::class, 'show'])->name('users.show');
        });

        Route::prefix('roles')->group(function () {
            Route::get('/', [RoleController::class, 'index'])->name('roles');
            Route::get('{role:uuid}', [RoleController::class, 'show'])->name('roles.show');
        });

        Route::prefix('teams')->group(function () {
            Route::get('/', [TeamController::class, 'index'])->name('teams');
            Route::get('{team:uuid}', [TeamController::class, 'show'])->name('teams.show');
        });

        Route::get('logout', [DashboardController::class, 'index'])->name('logout');
    });

    Route::get('terms-and-conditions', [TermsController::class, 'index'])->name('terms');
});
