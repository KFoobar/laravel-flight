@extends('layouts.app')

@section('breadcrumbs')
    <x-breadcrumbs-item url="{{ route('users') }}">
        Users
    </x-breadcrumbs-item>
@endsection

@section('content')
    <div class="flex items-center justify-between mb-8">
        <h1 class="title">Users</h1>
        <div>
            @livewire('user-create-form')
        </div>
    </div>
    @livewire('user-list')
@endsection
