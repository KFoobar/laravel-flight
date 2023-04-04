@extends('layouts.app')

@section('breadcrumbs')
    <x-breadcrumbs-item url="{{ route('profile') }}">
        My account
    </x-breadcrumbs-item>
@endsection

@section('content')
    <div class="flex items-center justify-between mb-8">
        <h1 class="title">My account</h1>
        <div>&nbsp;</div>
    </div>
    @livewire('profile-details-form')
@endsection
