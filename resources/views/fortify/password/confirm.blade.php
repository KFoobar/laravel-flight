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
                    Confirm with password
                </h1>
                <div class="font-light text-gray-500 dark:text-gray-400">
                    The page your trying to reach is password protected.
                    Please confirm your password to continue.
                </div>
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('password.confirm') }}" method="POST" class="space-y-4 md:space-y-6">
                    @csrf
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        @error('password')
                            <div class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Continue
                    </button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Changed your mind?
                        <a href="{{ url()->previous() }}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">
                            Go back
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
