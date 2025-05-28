
@extends('layouts.app')

@section('content')
<div class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 md:px-6">
        <div class="bg-white shadow-md rounded-lg p-6 animate-fade-in">
            <div class="flex flex-wrap items-center justify-between mb-6">
                <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
                <div>
                    <a href="{{ route('password.change') }}" class="text-sm text-Bloghub-600 hover:text-Bloghub-800 mr-4">
                        Change Password
                    </a>
                    <a href="{{ route('blog.create') }}" class="bg-Bloghub-600 hover:bg-Bloghub-700 text-white text-sm font-medium py-2 px-4 rounded-md transition-colors inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        New Post
                    </a>
                </div>
            </div>

            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="bg-Bloghub-50 border border-Bloghub-200 rounded-lg p-6 mb-6">
                <h2 class="text-lg font-semibold text-Bloghub-800 mb-2">Welcome, {{ $user->name }}!</h2>
                <p class="text-Bloghub-600">You've successfully logged into your Bloghub account.</p>
            </div>

            <!-- Blog Statistics -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Your Blog Statistics</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="bg-white border border-gray-200 rounded-lg p-5 shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="font-medium text-gray-800 mb-2">Total Posts</h3>
                        <p class="text-3xl font-bold text-Bloghub-600">{{ $totalPosts }}</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg p-5 shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="font-medium text-gray-800 mb-2">Published</h3>
                        <p class="text-3xl font-bold text-green-600">{{ $publishedPosts }}</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg p-5 shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="font-medium text-gray-800 mb-2">Drafts</h3>
                        <p class="text-3xl font-bold text-amber-600">{{ $draftPosts }}</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg p-5 shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="font-medium text-gray-800 mb-2">Total Views</h3>
                        <p class="text-3xl font-bold text-blue-600">{{ $user->total_views }}</p>
                    </div>
                </div>
            </div>

            <!-- Recent Posts -->
            <div class="mb-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Your Recent Posts</h2>
                    <a href="{{ route('blog.index') }}" class="text-sm text-Bloghub-600 hover:text-Bloghub-800">
                        View All Posts
                    </a>
                </div>

                @if($posts->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Published</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Views</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach($posts as $post)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">{{ $post->title }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if($post->is_published)
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Published
                                                </span>
                                            @else
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                    Draft
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $post->published_at ? $post->published_at->format('M d, Y') : 'Not published' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $post->views }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('blog.show', $post->slug) }}" class="text-Bloghub-600 hover:text-Bloghub-900 mr-3">
                                                View
                                            </a>
                                            <a href="{{ route('blog.edit', $post->id) }}" class="text-amber-600 hover:text-amber-900 mr-3">
                                                Edit
                                            </a>
                                            <form action="{{ route('blog.destroy', $post->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this post?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="bg-gray-50 rounded-lg p-8 text-center">
                        <p class="text-gray-600">You haven't created any posts yet.</p>
                        <a href="{{ route('blog.create') }}" class="mt-4 inline-block bg-Bloghub-600 hover:bg-Bloghub-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
                            Create Your First Post
                        </a>
                    </div>
                @endif
            </div>

            <div class="flex justify-end">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition-colors">
                        Sign Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
