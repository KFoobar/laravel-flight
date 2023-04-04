@extends('layouts.app')

@section('breadcrumbs')
    <x-breadcrumbs-item url="{{ route('users') }}">
        Users
    </x-breadcrumbs-item>
    <x-breadcrumbs-item url="{{ route('users.show', $user) }}">
        {{ $user->name }}
    </x-breadcrumbs-item>
@endsection

@section('content')
    <div class="flex items-center justify-between mb-8">
        <h1 class="title">{{ $user->name }}</h1>
    </div>
    <div class="space-y-8">
        @livewire('user-edit-form', ['user' => $user])
        @livewire('user-role-form', ['user' => $user])
        @if (!auth()->user()->is($user))
            @livewire('user-status-form', ['user' => $user])
            @livewire('user-delete-form', ['user' => $user])
        @endif
    </div>
@endsection
