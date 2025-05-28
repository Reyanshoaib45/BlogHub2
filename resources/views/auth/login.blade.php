
@extends('layouts.app')

@section('content')
<div class="py-20 min-h-screen flex items-center justify-center bg-gray-50">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md animate-fade-in">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-900 mb-2">Welcome Back</h1>
            <p class="text-gray-600">Sign in to continue to Bloghub</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-Bloghub-500 focus:border-Bloghub-500"
                    placeholder="Enter your email">
            </div>

            <div>
                <div class="flex items-center justify-between mb-1">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <a href="{{ route('password.change') }}" class="text-sm text-Bloghub-600 hover:text-Bloghub-500">Forgot password?</a>
                </div>
                <input id="password" name="password" type="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-Bloghub-500 focus:border-Bloghub-500"
                    placeholder="Enter your password">
            </div>

            <div class="flex items-center">
                <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-Bloghub-600 focus:ring-Bloghub-500 border-gray-300 rounded">
                <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
            </div>

            <div>
                <button type="submit" class="w-full bg-Bloghub-600 text-white py-2 px-4 rounded-md hover:bg-Bloghub-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-Bloghub-500 transition-colors">
                    Sign In
                </button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-Bloghub-600 hover:text-Bloghub-500 font-medium">
                    Sign up
                </a>
            </p>
        </div>
    </div>
</div>
@endsection
