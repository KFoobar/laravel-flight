@extends('layouts.guest')

@section('content')
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="flex items-center mb-6 text-3xl font-semibold text-gray-900 dark:text-white">
            <x-flight::logo />
            {{ config('app.name') }}
        </div>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Almost there...
                </h1>
                <div class="font-light text-gray-500 dark:text-gray-400">
                    Your account is still unverified, to continue you need to verify your account by clicking
                    the verification link sent to your e-mail.
                </div>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        A new verification link has been sent to you!
                    </div>
                @endif
                <form action="{{ route('verification.send') }}" method="POST" class="">
                    @csrf
                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Resend verification link
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
