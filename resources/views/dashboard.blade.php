@extends('layouts.app')

@section('title', 'Dashboard - Yora')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
        <p class="text-sm text-gray-500 mt-1">Welcome back, {{ auth()->user()->fullname() }}.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-5">
            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Total Users</p>
            <p class="mt-2 text-2xl font-semibold text-gray-900">{{ \App\Models\User::count() }}</p>
        </div>
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-5">
            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Your Account</p>
            <p class="mt-2 text-sm text-gray-900">{{ auth()->user()->email }}</p>
        </div>
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-5">
            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Status</p>
            <p class="mt-2 text-sm text-green-600 font-medium">Active</p>
        </div>
    </div>
</div>
@endsection
