@extends('layouts.app')

@section('breadcrumbs')
    <x-breadcrumbs-item url="{{ route('roles') }}">
        Roles
    </x-breadcrumbs-item>
    <x-breadcrumbs-item url="{{ route('roles.show', $role) }}">
        {{ $role->name }}
    </x-breadcrumbs-item>
@endsection

@section('content')
    <div class="flex items-center justify-between mb-8">
        <h1 class="title">{{ $role->name }}</h1>
    </div>
    <div class="space-y-8">
        @livewire('role-edit-form', ['role' => $role])
    </div>
@endsection
