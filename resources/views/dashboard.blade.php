@extends('layouts.admin-dash')
@section('content')
<div class="py-12 text-center">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{-- <strong>{{ __("Welcome To Rental Car System Dashboard!") }}</strong> --}}
            </div>
        </div>
    </div>
    <div class="p-6 text-gray-900 dark:text-gray-100 mt-5" style="padding-top: 8%;
    font-size: xx-large;">
        <strong>{{ __("Welcome To Rental Car System Dashboard!") }}</strong>
    </div>
</div>
@endsection
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome To Rental Car System Dashboard!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}