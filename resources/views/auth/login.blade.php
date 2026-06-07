@extends('layouts.auth')

@section('title', 'Login - Yora')

@section('content')
<div class="bg-white rounded-lg shadow-md p-8">
    <h1 class="text-2xl font-bold text-center mb-6">Login</h1>
    <p class="text-center text-gray-600 mb-4">Login form coming soon.</p>
    <div class="text-center">
        <a href="{{ route('welcome') }}" class="text-blue-600 hover:underline">Back to home</a>
    </div>
</div>
@endsection