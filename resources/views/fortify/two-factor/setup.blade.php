@extends('layouts.guest')

@section('content')
    <section class="min-h-screen flex items-center bg-gray-50 dark:bg-gray-900 py-4 sm:py-12">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
            <div class="flex items-center mb-6 text-3xl font-semibold text-gray-900 dark:text-white">
                <x-flight::logo />
                {{ config('app.name') }}
            </div>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                @livewire('two-factor-setup')
            </div>
        </div>
    </section>
@endsection
