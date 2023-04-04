@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-2 gap-4">
        <div class="col-span-2">
            <div class="card bg-pattern px-6 py-10">
                <div class="text-blue-300 font-bold">
                    {{ now()->toDateString() }}
                </div>
                <div class="text-white text-3xl font-bold">
                    Welcome {{ auth()->user()->name }}!
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="card flex items-center justify-center h-32">
                <span class="text-gray-300 text-3xl leading-10 uppercase">
                    Demo
                </span>
            </div>
            <div class="card flex items-center justify-center h-32">
                <span class="text-gray-300 text-3xl leading-10 uppercase">
                    Demo
                </span>
            </div>
            <div class="card flex items-center justify-center h-32">
                <span class="text-gray-300 text-3xl leading-10 uppercase">
                    Demo
                </span>
            </div>
            <div class="card flex items-center justify-center h-32">
                <span class="text-gray-300 text-3xl leading-10 uppercase">
                    Demo
                </span>
            </div>
        </div>
        <div class="card flex items-center justify-center h-full">
            <span class="text-gray-300 text-3xl leading-10 uppercase">
                Demo
            </span>
        </div>
        <div class="card flex items-center justify-center col-span-2 h-64">
            <span class="text-gray-300 text-3xl leading-10 uppercase">
                Demo
            </span>
        </div>
    </div>
@endsection
