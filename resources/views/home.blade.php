@extends('layouts.app')
@section('title', 'BlogHub - Modern Blogging Platform')
@section('content')
    <main>
        <!-- Hero Section -->
        <section id="home" class="relative pt-32 pb-16 md:pt-40 md:pb-24 overflow-hidden">
            <!-- Background Elements -->
            <div class="absolute inset-0 bg-gradient-to-b from-white to-accent/10 -z-10"></div>
            <div class="absolute top-1/4 -left-24 w-64 h-64 bg-primary/10 rounded-full blur-3xl opacity-60 -z-10"></div>
            <div class="absolute bottom-1/3 -right-32 w-80 h-80 bg-secondary/10 rounded-full blur-3xl opacity-70 -z-10">
            </div>

            <div class="container mx-auto px-4 md:px-6">
                <div class="max-w-screen-lg mx-auto text-center">
                    <!-- Pill Badge -->
                    <div
                        class="inline-flex items-center px-3 py-1 rounded-full bg-primary/10 text-primary font-medium text-sm mb-6 animate-fade-in">
                        <span class="inline-block w-2 h-2 rounded-full bg-primary mr-2"></span>
                        Discover Stories That Matter
                    </div>

                    <!-- Headline -->
                    <h1
                        class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-dark mb-6 animate-fade-in delay-200">
                        Share Your <span class="text-primary">Story</span> With<br class="hidden sm:block">
                        The World
                    </h1>

                    <!-- Subheadline -->
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8 md:mb-10 animate-fade-in delay-400">
                        BlogHub offers a beautiful, simple platform for you to share your thoughts, ideas, and
                        stories with readers around the globe.
                    </p>

                    <!-- CTA Buttons -->
                    <div
                        class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12 md:mb-16 animate-fade-in delay-600">
                        <a href="{{ route('blog.index') }}"
                            class="w-full sm:w-auto px-6 py-3 bg-primary text-white rounded-full font-medium hover:bg-secondary transition-colors flex items-center justify-center btn-hover-effect">
                            Start Writing
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                        <a href="{{ route('blog.index') }}"
                            class="w-full sm:w-auto px-6 py-3 border border-gray-300 text-gray-700 rounded-full font-medium hover:bg-gray-50 transition-colors flex items-center justify-center">
                            Explore Blogs
                        </a>
                    </div>

                    <!-- Featured Image -->
                    <div
                        class="relative mx-auto max-w-4xl rounded-xl overflow-hidden shadow-soft border border-gray-200 animate-scale-in">
                        <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                            alt="Person writing on a laptop with coffee" class="w-full h-auto" loading="lazy" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                    </div>

                    <!-- Stats or social proof -->
                    <div class="mt-12 grid grid-cols-2 md:grid-cols-3 gap-6 max-w-3xl mx-auto animate-fade-in delay-800">
                        <div class="text-center">
                            <p class="text-3xl font-bold text-primary">10k+</p>
                            <p class="text-gray-500 text-sm">Active Writers</p>
                        </div>
                        <div class="text-center">
                            <p class="text-3xl font-bold text-primary">2M+</p>
                            <p class="text-gray-500 text-sm">Monthly Readers</p>
                        </div>
                        <div class="text-center col-span-2 md:col-span-1">
                            <p class="text-3xl font-bold text-primary">50k+</p>
                            <p class="text-gray-500 text-sm">Articles Published</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Posts Section -->
        <section id="featured" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4 md:px-6">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in">
                    <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">
                        Featured Stories
                    </h2>
                    <p class="text-xl text-gray-600">
                        Discover our handpicked selection of the best content from our community of writers.
                    </p>
                </div>

                <!-- Featured Post - Large -->
                @if ($mainFeaturedPost)
                    <div class="mb-16 animate-fade-in">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div class="rounded-xl overflow-hidden h-full">
                                <img src="{{ url('storage/' . $mainFeaturedPost->featured_image) }}"
                                    alt="{{ $mainFeaturedPost->title }}" class="w-full h-full object-cover max-h-[400px]"
                                    loading="lazy">
                            </div>
                            <div class="flex flex-col justify-center">
                                <span
                                    class="text-primary text-sm font-semibold mb-2">{{ strtoupper($mainFeaturedPost->category) }}</span>
                                <h3 class="text-2xl md:text-3xl font-bold mb-4">{{ $mainFeaturedPost->title }}</h3>
                                <p class="text-gray-600 mb-6">
                                    {{ $mainFeaturedPost->main_content ?: \Illuminate\Support\Str::limit($mainFeaturedPost->content, 200) }}
                                </p>
                                <div class="flex items-center mb-6">
                                    <img loading="lazy"
                                        src="{{ asset('storage/' . $mainFeaturedPost->author->profile_picture) }}"
                                        alt="{{ $mainFeaturedPost->author->name }}"
                                        class="w-10 h-10 rounded-full object-cover mr-4" />
                                    <div>
                                        <p class="font-medium">{{ $mainFeaturedPost->author->name }}</p>
                                        <p class="text-gray-500 text-sm">
                                            {{ $mainFeaturedPost->published_at->format('M d, Y') }} ·
                                            {{ $mainFeaturedPost->reading_time ?? '8' }} min read</p>
                                    </div>
                                </div>
                                <a href="{{ route('blog.show', $mainFeaturedPost->id) }}"
                                    class="px-6 py-3 bg-primary/10 text-primary rounded-full font-medium hover:bg-primary/20 transition-colors self-start flex items-center">
                                    Read Article
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Featured Posts Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($gridFeaturedPosts as $post)
                        <article class="bg-white rounded-xl shadow-soft overflow-hidden blog-card animate-fade-in">
                            <div class="relative aspect-[16/9] overflow-hidden">
                                <img src="{{ url('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                    class="w-full h-full object-cover" loading="lazy">
                                <div
                                    class="absolute top-4 left-4 bg-white/90 text-primary text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                    {{ strtoupper($post->category) }}
                                </div>
                            </div>

                            <div class="p-6">
                                <h3 class="text-xl font-bold text-dark mb-3 hover:text-primary transition-colors">
                                    <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    {{ $post->main_content ?: \Illuminate\Support\Str::limit($post->content, 120) }}
                                </p>

                                <div class="flex items-center text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <img loading="lazy" src="{{ asset('storage/' . $post->author->profile_picture) }}"
                                            alt="{{ $post->author->name }}"
                                            class="w-8 h-8 rounded-full object-cover mr-2" />
                                        <span>{{ $post->author->name }}</span>
                                    </div>
                                    <span class="mx-2">•</span>
                                    <span>{{ $post->published_at->format('M d, Y') }}</span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="text-center mt-12">
                    <a href="{{ route('blog.index') }}"
                        class="px-6 py-3 border border-gray-300 text-gray-700 rounded-full font-medium hover:bg-gray-50 transition-colors inline-flex items-center animate-fade-in">
                        View All Featured Stories
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section id="categories" class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in">
                    <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">
                        Explore Categories
                    </h2>
                    <p class="text-xl text-gray-600">
                        Discover content curated by topics that matter to you
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Category 1 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-soft hover:shadow-hover transition-all duration-300 animate-fade-in delay-100">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <i class="fas fa-laptop-code text-primary text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Technology</h3>
                        <p class="text-gray-600 text-sm mb-4">Latest in tech trends, software development, and digital
                            innovation.</p>
                        <a href="{{ route('blog.index') }}"
                            class="text-primary font-medium text-sm flex items-center hover:text-secondary transition-colors">
                            View Articles
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>

                    <!-- Category 2 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-soft hover:shadow-hover transition-all duration-300 animate-fade-in delay-200">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <i class="fas fa-pencil-alt text-primary text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Writing</h3>
                        <p class="text-gray-600 text-sm mb-4">Tips, techniques, and inspiration for writers of all
                            levels.</p>
                        <a href="{{ route('blog.index') }}"
                            class="text-primary font-medium text-sm flex items-center hover:text-secondary transition-colors">
                            View Articles
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>

                    <!-- Category 3 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-soft hover:shadow-hover transition-all duration-300 animate-fade-in delay-300">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <i class="fas fa-chart-line text-primary text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Marketing</h3>
                        <p class="text-gray-600 text-sm mb-4">Strategies, case studies, and insights for modern
                            marketers.</p>
                        <a href="{{ route('blog.index') }}"
                            class="text-primary font-medium text-sm flex items-center hover:text-secondary transition-colors">
                            View Articles
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>

                    <!-- Category 4 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-soft hover:shadow-hover transition-all duration-300 animate-fade-in delay-400">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <i class="fas fa-palette text-primary text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Design</h3>
                        <p class="text-gray-600 text-sm mb-4">UX/UI, graphic design, and visual storytelling
                            principles.</p>
                        <a href="{{ route('blog.index') }}"
                            class="text-primary font-medium text-sm flex items-center hover:text-secondary transition-colors">
                            View Articles
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>

                    <!-- Category 5 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-soft hover:shadow-hover transition-all duration-300 animate-fade-in delay-100">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <i class="fas fa-brain text-primary text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Psychology</h3>
                        <p class="text-gray-600 text-sm mb-4">Understanding human behavior, motivation, and cognitive
                            processes.</p>
                        <a href="{{ route('blog.index') }}"
                            class="text-primary font-medium text-sm flex items-center hover:text-secondary transition-colors">
                            View Articles
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>

                    <!-- Category 6 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-soft hover:shadow-hover transition-all duration-300 animate-fade-in delay-200">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <i class="fas fa-briefcase text-primary text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Business</h3>
                        <p class="text-gray-600 text-sm mb-4">Entrepreneurship, leadership, and business strategy
                            insights.</p>
                        <a href="{{ route('blog.index') }}"
                            class="text-primary font-medium text-sm flex items-center hover:text-secondary transition-colors">
                            View Articles
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>

                    <!-- Category 7 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-soft hover:shadow-hover transition-all duration-300 animate-fade-in delay-300">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <i class="fas fa-camera text-primary text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Photography</h3>
                        <p class="text-gray-600 text-sm mb-4">Techniques, equipment reviews, and visual storytelling.
                        </p>
                        <a href="{{ route('blog.index') }}"
                            class="text-primary font-medium text-sm flex items-center hover:text-secondary transition-colors">
                            View Articles
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>

                    <!-- Category 8 -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-soft hover:shadow-hover transition-all duration-300 animate-fade-in delay-400">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <i class="fas fa-seedling text-primary text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Lifestyle</h3>
                        <p class="text-gray-600 text-sm mb-4">Wellness, personal development, and balanced living.</p>
                        <a href="{{ route('blog.index') }}"
                            class="text-primary font-medium text-sm flex items-center hover:text-secondary transition-colors">
                            View Articles
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
