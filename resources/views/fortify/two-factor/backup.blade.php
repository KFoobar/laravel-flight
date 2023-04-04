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
                            Backup codes
                        </h1>
                        <div class="font-light text-gray-500 dark:text-gray-400 mt-4">
                            Save these codes and store it somewhere safe.
                            If you lose your phone, you can use these recovery codes
                            to sign in.
                        </div>
                        <div class="flex items-center justify-center mt-6">
                            <ul class="grid grid-cols-1 gap-2">
                                @foreach (auth()->user()->recoveryCodes() as $code)
                                    <li class="font-bold text-white text-sm text-center">{{ $code }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center justify-evenly gap-4 p-6 sm:p-8">
                        <a href="{{ route('profile.password') }}" class="btn-default w-full">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
