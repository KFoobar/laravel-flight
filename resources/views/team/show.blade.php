@extends('layouts.app')

@section('breadcrumbs')
    <x-breadcrumbs-item url="{{ route('teams') }}">
        Teams
    </x-breadcrumbs-item>
    <x-breadcrumbs-item url="{{ route('teams.show', $team) }}">
        {{ $team->name }}
    </x-breadcrumbs-item>
@endsection

@section('content')
    <div class="flex items-center justify-between mb-8">
        <h1 class="title">{{ $team->name }}</h1>
    </div>
    <div class="space-y-8">
        @livewire('team-edit-form', ['team' => $team])
        @if (!$team->locked)
            @livewire('team-delete-form', ['team' => $team])
        @endif
    </div>
@endsection
