@extends('layouts.app')

@section('breadcrumbs')
    <x-breadcrumbs-item url="{{ route('teams') }}">
        Users
    </x-breadcrumbs-item>
@endsection

@section('content')
    <div class="flex items-center justify-between mb-8">
        <h1 class="title">Teams</h1>
        <div>
            @livewire('team-create-form')
        </div>
    </div>
    @livewire('team-list')
@endsection
