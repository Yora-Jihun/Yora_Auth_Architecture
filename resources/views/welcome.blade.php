@extends('layouts.landing')

@section('title', 'Welcome - Yora')

@section('content')
<div class="text-center py-20">
    <h1 class="text-4xl font-bold text-gray-900 mb-4">Welcome to Yora</h1>
    <p class="text-lg text-gray-600 mb-8">A simple auth architecture built with Laravel and Livewire.</p>
    <div class="space-x-4">
        <a href="{{ route('login') }}" class="bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-900">Login</a>
        <a href="{{ route('register') }}" class="border border-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-50">Register</a>
    </div>
</div>
@endsection