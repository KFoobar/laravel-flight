@extends('layouts.app')

@section('breadcrumbs')
    <x-breadcrumbs-item url="{{ route('roles') }}">
        Roles
    </x-breadcrumbs-item>
@endsection

@section('content')
    <div class="flex items-center justify-between mb-8">
        <h1 class="title">Roles</h1>
        <div>&nbsp;</div>
    </div>
    @livewire('role-list')
@endsection
