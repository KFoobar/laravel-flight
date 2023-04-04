@extends('layouts.guest')

@section('content')
    <section class="min-h-screen flex items-center bg-gray-50 dark:bg-gray-900 py-4 sm:py-12">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
            <div class="flex items-center mb-6 text-3xl font-semibold text-gray-900 dark:text-white">
                <x-flight::logo />
                {{ config('app.name') }}
            </div>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col divide-y dark:divide-gray-700">
                    <div class="p-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Two factor authentication
                        </h1>
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="font-light text-gray-500 dark:text-gray-400 mt-4">
                            We recommend using Google Authenticator, 1Password or Authy.
                            Once your authenticator app is installed,
                            scan the QR-code below and enter the security code
                            generated by your authenticator app.
                        </div>
                        <div class="flex items-center justify-center mt-6">
                            {!! auth()->user()->twoFactorQrCodeSvg() !!}
                        </div>
                    </div>
                    <div class="p-6 sm:p-8">
                        <label for="password" class="label">
                            Security code
                        </label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                        @error('password')
                            <div class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex items-center justify-evenly gap-4 p-6 sm:p-8">
                        <button type="submit" class="btn-blue w-full">
                            Verify code
                        </button>
                        <a href="{{ route('profile.password') }}" class="btn-default w-full">
                            Abort
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
