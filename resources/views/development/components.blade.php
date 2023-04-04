@extends('layouts.app')

@section('breadcrumbs')
    <x-flight::breadcrumb url="{{ route('development.components') }}">
        Development
    </x-flight::breadcrumb>
@endsection

@section('content')
    <div class="flex items-center justify-between mb-8">
        <h1 class="title">Components</h1>
    </div>
    <nav class="mx-auto max-w-7xl flex space-x-8 mb-8 border-b border-gray-300">
        <a href="#" class="border-b-2 border-blue-500 font-bold text-sm text-blue-500 hover:text-blue-500 whitespace-nowrap pb-2 px-1">Overview</a>
        <a href="#" class="border-b-2 border-transparent hover:border-blue-500 font-bold text-sm text-gray-600 hover:text-blue-500 whitespace-nowrap pb-2 px-1">Playground</a>
        <a href="#" class="border-b-2 border-transparent hover:border-blue-500 font-bold text-sm text-gray-600 hover:text-blue-500 whitespace-nowrap pb-2 px-1">Deployments</a>
        <a href="#" class="border-b-2 border-transparent hover:border-blue-500 font-bold text-sm text-gray-600 hover:text-blue-500 whitespace-nowrap pb-2 px-1">Branches</a>
        <a href="#" class="border-b-2 border-transparent hover:border-blue-500 font-bold text-sm text-gray-600 hover:text-blue-500 whitespace-nowrap pb-2 px-1">Settings</a>
    </nav>
    <div class="flex flex-col gap-6">
        <section class="card">
            <section class="card-header">
                <h2 class="heading">Form</h2>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
                </div>
            </section>
            <section class="card-body card-form">
                <div class="input-group">
                    <div class="label">Lorem ipsum</div>
                    <div class="sm:col-span-2">
                        <x-input name="" type="" value="" />
                        <x-error for="" />
                    </div>
                </div>
                <div class="input-group">
                    <div class="label">Lorem ipsum</div>
                    <div class="sm:col-span-2">
                        <x-textarea name="">
                            lorem
                        </x-textarea>
                        <x-error for="" />
                    </div>
                </div>
                <div class="input-group">
                    <div class="label">Lorem ipsum</div>
                    <div class="sm:col-span-2">
                        <x-select name="">
                            <x-option value="">Test</x-option>
                        </x-select>
                        <x-error for="" />
                    </div>
                </div>
            </section>
            <section class="card-footer">
                <x-button type="button" class="">
                    Save
                </x-button>
            </section>
        </section>
        <section class="card">
            <section class="card-header">
                <h2 class="heading">Table</h2>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
                </div>
            </section>
            <section class="card-body card-filter">
                <div class="flex items-center justify-between space-x-4">
                    <input wire:model="keyword" type="search" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    <select id="country" name="country" autocomplete="country-name" class="block rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                        <option>All customers</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                    <select id="country" name="country" autocomplete="country-name" class="block rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                </div>
            </section>
            <section class="card-body card-table">
                <table>
                    <thead>
                        <tr>
                            <th class="w-4 pr-0"></th>
                            <th class="text-left">Lorem</th>
                            <th>Lorem</th>
                            <th>Lorem</th>
                            <th>Lorem</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ([1,2,3,4,5,6] as $item)
                            <tr>
                                <td class="w-4 pr-0"><x-status color="green" /></td>
                                <td class="text-left">Lorem ipsum dolor</td>
                                <td>Lorem</td>
                                <td><span class="badge badge-green">Lorem</span></td>
                                <td>2000-01-01</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="100%">
                                <div class="w-full flex justify-between">
                                    <div>Found 500 items</div>
                                    <div>Prev / Next</div>
                                    <div>Page 1 / 5</div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </section>
        <section class="card">
            <div class="card-body card-cta">
                <div class="flex-grow">
                    <h2 class="heading">
                        Delete user
                    </h2>
                    <div class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatibus corrupti atque repudiandae nam.
                    </div>
                </div>
                <div class="flex-shrink">
                    <x-button>
                        Delete
                    </x-button>
                </div>
            </div>
        </section>
    </div>
@endsection
