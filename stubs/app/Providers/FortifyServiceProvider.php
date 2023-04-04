<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(
            \App\Actions\Fortify\CreateNewUser::class
        );

        Fortify::updateUserProfileInformationUsing(
            \App\Actions\Fortify\UpdateUserProfileInformation::class
        );

        Fortify::updateUserPasswordsUsing(
            \App\Actions\Fortify\UpdateUserPassword::class
        );

        Fortify::resetUserPasswordsUsing(
            \App\Actions\Fortify\ResetUserPassword::class
        );

        Fortify::registerView(function () {
            return view('flight::fortify.register.form');
        });

        Fortify::loginView(function () {
            return view('flight::fortify.auth.login');
        });

        Fortify::verifyEmailView(function () {
            return view('flight::fortify.auth.verify-email');
        });

        Fortify::requestPasswordResetLinkView(function () {
            return view('flight::fortify.password.forgot');
        });

        Fortify::resetPasswordView(function (Request $request) {
            return view('flight::fortify.password.reset', [
                'request' => $request
            ]);
        });

        Fortify::confirmPasswordView(function () {
            return view('flight::fortify.password.confirm');
        });

        Fortify::twoFactorChallengeView(function () {
            return view('auth.two-factor-challenge');
        });

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email . $request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
