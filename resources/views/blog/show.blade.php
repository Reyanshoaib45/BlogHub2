@extends('layouts.app')
@section('content')
    @php
        use Illuminate\Support\Str;
    @endphp
    <div class="bg-white py-12">
        <div class="container mx-auto px-4 md:px-6">
            <!-- Back Button -->
            <div class="mb-8">
                <a href="{{ route('blog.index') }}"
                    class="text-streamline-600 hover:text-streamline-700 inline-flex items-center transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to all posts
                </a>
            </div>

            <!-- Flash Messages -->
            <div id="flash-message-container">
                @if (session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8" role="alert">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
            </div>

            <!-- Article Header -->
            <header class="mb-10 animate-fade-in">
                <!-- Category Badge -->
                <div class="mb-4">
                    <span class="bg-streamline-100 text-streamline-600 text-sm font-medium px-3 py-1 rounded-full">
                        {{ $post->category }}
                    </span>
                </div>

                <!-- Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-gray-900 mb-6 max-w-4xl">
                    {{ $post->title }}
                </h1>

                <!-- Post Metadata -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 text-sm text-gray-500">
                    <!-- Author Info -->
                    <div class="flex items-center">
                        @if ($post->author->profile_picture)
                            <img loading="lazy" src="{{ asset('storage/' . $post->author->profile_picture) }}"
                                alt="{{ $post->author->name }}" class="w-10 h-10 rounded-full mr-3 object-cover">
                        @else
                            <div
                                class="w-10 h-10 rounded-full bg-streamline-100 text-streamline-600 flex items-center justify-center mr-3">
                                {{ substr($post->author->name, 0, 1) }}
                            </div>
                        @endif
                        <div>
                            <div class="font-medium text-gray-900">{{ $post->author->name }}</div>
                            <div class="flex items-center text-gray-500">
                                <span>{{ $post->published_at?->format('M d, Y') ?? 'Not Published' }}</span>
                                <span class="mx-2">•</span>
                                <span>{{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read</span>
                            </div>
                        </div>
                    </div>

                    <!-- Post Stats -->
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            {{ $post->views }} views
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                            <span id="comment-count">{{ $post->comments->count() }}</span> comments
                        </div>
                    </div>
                </div>
            </header>

            <div class="flex flex-col md:flex-row gap-10">
                <!-- Main Content -->
                <main class="flex-1 animate-fade-in">
                    <!-- Main Heading and Content -->

                    <!-- First Featured Image -->
                    @if ($post->featured_image)
                        <div class="mb-8 rounded-xl overflow-hidden">
                            <img loading="lazy" style="height: 400px !important;"
                                src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                class="w-full h-auto rounded-xl shadow-lg">
                        </div>
                    @endif

                    @if ($post->main_heading)
                        <div class="mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ $post->main_heading }}</h2>
                            @if ($post->main_content)
                                <div class="prose prose-lg max-w-none text-gray-700 mb-6">
                                    {!! \Mews\Purifier\Facades\Purifier::clean($post->main_content) !!}
                                </div>
                            @endif
                        </div>
                    @endif


                    <!-- Main Content Sections -->
                    <div class="prose prose-lg max-w-none mb-10">
                        <!-- First Subheading Section -->
                        @if ($post->subheading_1)
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $post->subheading_1 }}</h3>
                            @if ($post->subcontent_1)
                                <div class="text-gray-700 mb-6 leading-relaxed">
                                    {!! \Mews\Purifier\Facades\Purifier::clean($post->subcontent_1) !!}
                                </div>
                            @endif
                        @endif

                        <!-- Second Subheading Section -->
                        @if ($post->subheading_2)
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $post->subheading_2 }}</h3>
                            @if ($post->subcontent_2)
                                <div class="text-gray-700 mb-6 leading-relaxed">
                                    {!! \Mews\Purifier\Facades\Purifier::clean($post->subcontent_2) !!}
                                </div>
                            @endif
                        @endif

                        <!-- Third Subheading Section -->
                        @if ($post->subheading_3)
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $post->subheading_3 }}</h3>
                            @if ($post->subcontent_3)
                                <div class="text-gray-700 mb-6 leading-relaxed">
                                    {!! \Mews\Purifier\Facades\Purifier::clean($post->subcontent_3) !!}
                                </div>
                            @endif
                        @endif

                        <!-- Middle Image -->
                        @if ($post->featured_image_md)
                            <div class="my-8 rounded-xl overflow-hidden flex justify-center">
                                <img loading="lazy" src="{{ asset('storage/' . $post->featured_image_md) }}"
                                    alt="{{ $post->title }} - additional image"
                                    class="rounded-xl shadow-lg max-w-full h-auto">
                            </div>
                        @endif

                        <!-- Fourth Subheading Section -->
                        @if ($post->subheading_4)
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $post->subheading_4 }}</h3>
                            @if ($post->subcontent_4)
                                <div class="text-gray-700 mb-6 leading-relaxed">
                                    {!! \Mews\Purifier\Facades\Purifier::clean($post->subcontent_4) !!}
                                </div>
                            @endif
                        @endif

                        <!-- Fifth Subheading Section -->
                        @if ($post->subheading_5)
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $post->subheading_5 }}</h3>
                            @if ($post->subcontent_5)
                                <div class="text-gray-700 mb-6 leading-relaxed">
                                    {!! \Mews\Purifier\Facades\Purifier::clean($post->subcontent_5) !!}
                                </div>
                            @endif
                        @endif

                        <!-- Sixth Subheading Section -->
                        @if ($post->subheading_6)
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $post->subheading_6 }}</h3>
                            @if ($post->subcontent_6)
                                <div class="text-gray-700 mb-6 leading-relaxed">
                                    {!! \Mews\Purifier\Facades\Purifier::clean($post->subcontent_6) !!}
                                </div>
                            @endif
                        @endif

                        <!-- Seventh Subheading Section -->
                        @if ($post->subheading_7)
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $post->subheading_7 }}</h3>
                            @if ($post->subcontent_7)
                                <div class="text-gray-700 mb-6 leading-relaxed">
                                    {!! \Mews\Purifier\Facades\Purifier::clean($post->subcontent_7) !!}
                                </div>
                            @endif
                        @endif

                        <!-- Final Content -->
                        @if ($post->final_content)
                            <div class="mt-8">
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">Conclusion</h3>
                                <div class="text-gray-700 leading-relaxed">
                                    {!! \Mews\Purifier\Facades\Purifier::clean($post->final_content) !!}
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Tags -->
                    @if (count($post->tags) > 0)
                        <div class="mb-10">
                            <h3 class="text-lg font-semibold mb-3">Tags</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($post->tags as $tag)
                                    <span class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full">
                                        #{{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Like/Dislike -->
                    <div class="flex items-center space-x-4 mb-10 border-t border-b border-gray-100 py-6">
                        <span class="text-gray-700 font-medium">Was this article helpful?</span>
                        <button type="button"
                            class="like-button flex items-center bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2 rounded-md transition-colors"
                            data-post-id="{{ $post->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>
                            Yes (<span id="likes-count">{{ $post->likes }}</span>)
                        </button>
                        <button type="button"
                            class="dislike-button flex items-center bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2 rounded-md transition-colors"
                            data-post-id="{{ $post->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018a2 2 0 01.485.06l3.76.94m-7 10v5a2 2 0 002 2h.095c.5 0 .905-.405.905-.905 0-.714.211-1.412.608-2.006L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5" />
                            </svg>
                            No (<span id="dislikes-count">{{ $post->dislikes }}</span>)
                        </button>

                        <!-- Share Buttons -->
                        <div class="ml-auto">
                            <div class="flex items-center space-x-3">
                                <span class="text-gray-700">Share:</span>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}"
                                    target="_blank" class="text-gray-500 hover:text-blue-400 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                        <path
                                            d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                                    target="_blank" class="text-gray-500 hover:text-blue-600 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}"
                                    target="_blank" class="text-gray-500 hover:text-blue-700 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                        </path>
                                        <rect x="2" y="9" width="4" height="12"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Author Bio -->
                    <div class="bg-gray-50 rounded-xl p-6 mb-10">
                        <div class="flex flex-col md:flex-row gap-6">
                            @if ($post->author->profile_picture)
                                <img loading="lazy" src="{{ asset('storage/' . $post->author->profile_picture) }}"
                                    alt="{{ $post->author->name }}" class="w-20 h-20 rounded-full object-cover">
                            @else
                                <div
                                    class="w-20 h-20 rounded-full bg-streamline-100 text-streamline-600 flex items-center justify-center text-2xl font-semibold">
                                    {{ substr($post->author->name, 0, 1) }}
                                </div>
                            @endif
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                    About {{ $post->author->name }}</h3>
                                <p class="text-gray-600 mb-4">
                                    {{ $post->author->bio ?? 'This author has not added a bio yet.' }}
                                </p>
                                <div class="flex space-x-4">
                                    @if ($post->author->twitter)
                                        <a href="{{ $post->author->twitter }}" target="_blank"
                                            class="text-gray-500 hover:text-blue-400 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-5 w-5">
                                                <path
                                                    d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                                                </path>
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($post->author->facebook)
                                        <a href="{{ $post->author->facebook }}" target="_blank"
                                            class="text-gray-500 hover:text-blue-600 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-5 w-5">
                                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                </path>
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($post->author->linkedin)
                                        <a href="{{ $post->author->linkedin }}" target="_blank"
                                            class="text-gray-500 hover:text-blue-700 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-5 w-5">
                                                <path
                                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                </path>
                                                <rect x="2" y="9" width="4" height="12"></rect>
                                                <circle cx="4" cy="4" r="2"></circle>
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($post->author->instagram)
                                        <a href="{{ $post->author->instagram }}" target="_blank"
                                            class="text-gray-500 hover:text-pink-600 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-5 w-5">
                                                <rect x="2" y="2" width="20" height="20" rx="5"
                                                    ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5">
                                                </line>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <section class="mb-10">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-6">
                            Comments (<span id="comments-count">{{ $post->comments->count() }}</span>)
                        </h3>

                        @auth
                            <!-- Comment Form -->
                            <div class="mb-8">
                                <form id="comment-form" data-post-id="{{ $post->id }}">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Leave
                                            a comment</label>
                                        <textarea id="content" name="content" rows="4"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                            required></textarea>
                                    </div>
                                    <button type="submit"
                                        class="bg-streamline-600 hover:bg-streamline-700 text-white font-medium py-2 px-4 rounded-md transition-colors text-sm">
                                        Post Comment
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="bg-gray-50 p-4 rounded-md mb-8">
                                <p class="text-gray-700">Please <a href="{{ route('login') }}"
                                        class="text-streamline-600 hover:underline">log
                                        in</a> to leave a comment.</p>
                            </div>
                        @endauth

                        <!-- Comments List -->
                        <div id="comments-container" class="space-y-6">
                            @forelse($post->comments->where('parent_id', null) as $comment)
                                <div class="bg-white border border-gray-100 rounded-lg p-6"
                                    id="comment-{{ $comment->id }}">
                                    <div class="flex items-start gap-4">
                                        @if ($comment->user->profile_picture)
                                            <img loading="lazy"
                                                src="{{ asset('storage/' . $comment->user->profile_picture) }}"
                                                alt="{{ $comment->user->name }}"
                                                class="w-10 h-10 rounded-full object-cover">
                                        @else
                                            <div
                                                class="w-10 h-10 rounded-full bg-streamline-100 text-streamline-600 flex items-center justify-center">
                                                {{ substr($comment->user->name, 0, 1) }}
                                            </div>
                                        @endif
                                        <div class="flex-1">
                                            <div class="flex items-center justify-between mb-2">
                                                <div class="font-medium text-gray-900">{{ $comment->user->name }}</div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $comment->created_at->diffForHumans() }}</div>
                                            </div>
                                            <div class="prose prose-lg text-gray-700 mb-4">
                                                {!! Str::markdown(e($comment->content)) !!}
                                            </div>


                                            @auth

                                            @endauth

                                            <!-- Replies -->
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-8" id="no-comments-message">
                                    <p class="text-gray-500">No comments yet. Be the first to comment!</p>
                                </div>
                            @endforelse
                        </div>
                    </section>
                </main>

                <!-- Sidebar -->
                <aside class="w-full md:w-80 lg:w-96 animate-fade-in">
                    <!-- Author Card -->
                    <div class="bg-white border border-gray-100 rounded-xl p-6 mb-8 sticky top-24">
                        <!-- Post Actions -->
                        @auth
                            @if ($post->author_id === Auth::id())
                                <div class="flex gap-2 mb-6">
                                    <a href="{{ route('blog.edit', $post->id) }}"
                                        class="bg-streamline-600 hover:bg-streamline-700 text-white px-3 py-1 rounded text-sm flex-1 text-center">
                                        Edit
                                    </a>
                                    <form action="{{ route('blog.destroy', $post->id) }}" method="POST" class="flex-1"
                                        onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm w-full">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @endauth

                        <h3 class="text-lg font-semibold text-gray-900 mb-6">Related Posts</h3>

                        @if ($relatedPosts->count() > 0)
                            <div class="space-y-6">
                                @foreach ($relatedPosts as $relatedPost)
                                    <a href="{{ route('blog.show', $relatedPost->id) }}">
                                        <div class="flex gap-4" style="margin-bottom:10px">
                                            <div class="flex-shrink-0 w-20 h-20 rounded-md overflow-hidden">
                                                @if ($relatedPost->featured_image)
                                                    <img loading="lazy"
                                                        src="{{ asset('storage/' . $relatedPost->featured_image) }}"
                                                        alt="{{ $relatedPost->title }}"
                                                        class="w-full h-full object-cover" />
                                                @else
                                                    <div
                                                        class="w-full h-full bg-streamline-100 flex items-center justify-center text-streamline-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                        </svg>
                                                    </div>
                                                @endif
                                            </div>
                                            <div>
                                                <h4
                                                    class="font-medium text-gray-900 hover:text-streamline-600 transition-colors line-clamp-2">
                                                    {{ $relatedPost->title }}
                                                </h4>
                                                <p class="text-sm text-gray-500 mt-1">
                                                    {{ $relatedPost->published_at->format('M d, Y') }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-500">No related posts found.</p>
                        @endif
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/blog.js') }}"></script>
    <script>
        $(document).ready(function() {
            const csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Submit Comment
            $('#comment-form').submit(function(e) {
                e.preventDefault();

                let postId = $(this).data('post-id');
                let content = $('textarea[name="content"]').val().trim();

                if (!content) return;

                $.ajax({
                    url: `/blog/${postId}/comment`,
                    type: 'POST',
                    data: JSON.stringify({
                        content: content
                    }),
                    contentType: 'application/json',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(data) {
                        if (data.success) {
                            $('#comment-form')[0].reset();
                            updateCommentCount();
                            prependComment(data);
                            showFlashMessage('Comment added successfully!', 'success');
                        }
                    },
                    error: function() {
                        showFlashMessage('Error posting comment. Try again.', 'error');
                    }
                });
            });

            $(document).on('click', '.like-button, .dislike-button', function() {
                let postId = $(this).data('post-id');
                let action = $(this).hasClass('like-button') ? 'like' : 'dislike';
                let likeBtn = $('.like-button[data-post-id="' + postId + '"]');
                let dislikeBtn = $('.dislike-button[data-post-id="' + postId + '"]');

                $.ajax({
                    url: "/blog/like/" + postId,
                    type: "POST",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        action: action
                    },
                    success: function(data) {
                        if (data.success) {
                            $('#likes-count').text(data.likes);
                            $('#dislikes-count').text(data.dislikes);

                            if (action === "like") {
                                likeBtn.css('color', likeBtn.css('color') === 'rgb(255, 0, 0)' ?
                                    'black' : 'red');
                                dislikeBtn.css('color', 'black'); // Reset dislike color
                            } else {
                                dislikeBtn.css('color', dislikeBtn.css('color') ===
                                    'rgb(255, 0, 0)' ? 'black' : 'red');
                                likeBtn.css('color', 'black'); // Reset like color
                            }
                        }
                    }
                });
            });

            // Update Comment Count
            function updateCommentCount() {
                let count = parseInt($('#comments-count').text()) + 1;
                $('#comments-count, #comment-count').text(count);
            }

            // Add New Comment
            function prependComment(data) {
                let username = data.user.username || "Unknown User";
                let profilePic = data.user.user_profile_picture ?
                    `<img src="${data.user.user_profile_picture}" class="w-10 h-10 rounded-full">` :
                    `<div class="w-10 h-10 bg-gray-300 flex items-center justify-center rounded-full">${data.user.user_initial}</div>`;

                $('#comments-container').prepend(`
            <div class="bg-white border rounded-lg p-4" id="comment-${data.comment.id}">
                <div class="flex items-start gap-3">
                    ${profilePic}
                    <div class="flex-1">
                        <div class="font-medium">${username}</div>
                        <div class="text-sm text-gray-500">${data.comment.created_at}</div>
                        <p class="text-gray-700">${data.comment.content}</p>
                    </div>
                </div>
            </div>
        `);
            }

            // Show Flash Message
            function showFlashMessage(message, type = 'success') {
                let bgColor = type === 'error' ? 'bg-red-100 text-red-700 border-red-500' :
                    'bg-green-100 text-green-700 border-green-500';

                let messageElement = $(`<div class="border-l-4 ${bgColor} p-3 mb-2">${message}</div>`);
                $('#flash-message-container').append(messageElement);

                setTimeout(() => {
                    messageElement.fadeOut(500, function() {
                        $(this).remove();
                    });
                }, 3000);
            }
        });
    </script>
@endsection
