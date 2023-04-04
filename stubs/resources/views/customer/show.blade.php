@extends('layouts.app')

@section('breadcrumbs')
    <x-breadcrumbs-item url="{{ route('customers') }}">
        Customers
    </x-breadcrumbs-item>
    <x-breadcrumbs-item url="{{ route('customers', $customer) }}">
        {{ $customer->company }}
    </x-breadcrumbs-item>
@endsection

@section('content')
    <div class="flex items-center justify-between mb-8">
        <h1 class="title">{{ $customer->company }}</h1>
    </div>
    <div class="space-y-8">
        @livewire('customer.customer-edit-form', ['customer' => $customer])
        @livewire('customer.customer-delete-form', ['customer' => $customer])
    </div>
@endsection
