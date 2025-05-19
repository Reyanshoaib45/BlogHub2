@extends('layouts.app')
@section('content')
    <div class="bg-streamline-50 py-12">
        <div class="container mx-auto px-4 md:px-6">
            <!-- Blog Header -->
            <div class="text-center mb-12 animate-fade-in">
                <h1 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-4">
                    Our Blog
                </h1>
                <p class="text-xl text-gray-600 text-balance max-w-2xl mx-auto">
                    Insights, tips, and strategies to help you maximize your productivity.
                </p>
            </div>

            <!-- Top Actions Bar -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-2xl font-semibold text-gray-800">Latest Articles</h2>
                </div>
                @auth
                    <a href="{{ route('blog.create') }}"
                        class="bg-streamline-600 hover:bg-streamline-700 text-white font-medium py-2 px-4 rounded-md transition-colors text-sm inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Write New Post
                    </a>
                @endauth
            </div>

            <!-- Flash Messages -->
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-8" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            <!-- Blog Posts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($posts as $post)
                    <article class="bg-white rounded-xl shadow-subtle overflow-hidden group animate-fade-in">
                        <a href="{{ route('blog.show', $post->id) }}">
                            <!-- Image -->
                            <div class="relative aspect-[16/9] overflow-hidden">
                                @if ($post->featured_image)
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                        loading="lazy" />
                                @else
                                    <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b"
                                        alt="{{ $post->title }}"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                        loading="lazy" />
                                @endif
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                                <span
                                    class="absolute top-4 left-4 bg-streamline-600 text-white text-xs font-medium px-2.5 py-1 rounded-full">
                                    {{ $post->category }}
                                </span>
                            </div>

                            <!-- Content -->
                            <div class="p-6">
                                <h3
                                    class="text-xl font-semibold text-gray-900 mb-3 group-hover:text-streamline-600 transition-colors">
                                    {{ $post->title }}
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($post->main_content), 100) }}

                                </p>

                                <!-- Meta -->
                                <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        {{ $post->published_at->format('M d, Y') }}
                                    </div>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        {{ $post->views }} views
                                    </div>
                                </div>

                                <!-- Author -->
                                <div class="flex items-center pt-4 border-t border-gray-100">
                                    @if ($post->author->profile_picture)
                                        <img loading="lazy" src="{{ asset('storage/' . $post->author->profile_picture) }}"
                                            alt="{{ $post->author->name }}" class="w-8 h-8 rounded-full mr-3 object-cover">
                                    @else
                                        <div
                                            class="w-8 h-8 rounded-full bg-streamline-100 text-streamline-600 flex items-center justify-center mr-3">
                                            {{ substr($post->author->name, 0, 1) }}
                                        </div>
                                    @endif
                                    <span class="text-sm font-medium text-gray-700">{{ $post->author->name }}</span>
                                </div>
                            </div>
                        </a>
                    </article>
                @empty
                    <div class="col-span-3 text-center py-12">
                        <p class="text-gray-500 text-lg">No blog posts found.</p>
                        @auth
                            <a href="{{ route('blog.create') }}"
                                class="mt-4 inline-block bg-streamline-600 hover:bg-streamline-700 text-white font-medium py-2 px-4 rounded-md transition-colors text-sm">
                                Write the first post
                            </a>
                        @endauth
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
