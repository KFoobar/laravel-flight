@extends('layouts.app')

@section('breadcrumbs')
    <x-breadcrumbs-item url="{{ route('customers') }}">
        Customers
    </x-breadcrumbs-item>
@endsection

@section('content')
    <div class="flex items-center justify-between mb-8">
        <h1 class="title">Customers</h1>
        <div>
            @livewire('customer.customer-create-form')
        </div>
    </div>
    @livewire('customer.customer-list')
@endsection
