
@extends('layouts.app')

@section('content')
<div class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 md:px-6 max-w-md">
        <div class="bg-white shadow-md rounded-lg p-6 animate-fade-in">
            <h1 class="text-2xl font-bold text-gray-900 mb-6">Change Password</h1>

            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                    <input id="current_password" type="password" name="current_password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-Bloghub-500 focus:border-transparent" required>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                    <input id="password" type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-Bloghub-500 focus:border-transparent" required>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-Bloghub-500 focus:border-transparent" required>
                </div>

                <div class="flex items-center justify-between pt-4">
                    <a href="{{ route('dashboard') }}" class="text-sm text-Bloghub-600 hover:text-Bloghub-800">
                        Back to Dashboard
                    </a>
                    <button type="submit" class="bg-Bloghub-600 hover:bg-Bloghub-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
                        Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
