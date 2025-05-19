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
                        <a href="#"
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
                <div class="mb-16 animate-fade-in">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div class="rounded-xl overflow-hidden h-full">
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="The Future of Remote Work" class="w-full h-full object-cover max-h-[400px]"
                                 loading="lazy" />
                        </div>
                        <div class="flex flex-col justify-center">
                            <span class="text-primary text-sm font-semibold mb-2">TECHNOLOGY</span>
                            <h3 class="text-2xl md:text-3xl font-bold mb-4">The Future of Remote Work: How Technology
                                is Transforming Our Workspaces</h3>
                            <p class="text-gray-600 mb-6">Explore the latest trends in remote work technology and
                                discover how companies are adapting to the new normal of distributed teams.</p>
                            <div class="flex items-center mb-6">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson"
                                     class="w-10 h-10 rounded-full object-cover mr-4" />
                                <div>
                                    <p class="font-medium">Sarah Johnson</p>
                                    <p class="text-gray-500 text-sm">May 12, 2023 · 8 min read</p>
                                </div>
                            </div>
                            <a href="#"
                               class="px-6 py-3 bg-primary/10 text-primary rounded-full font-medium hover:bg-primary/20 transition-colors self-start flex items-center">
                                Read Article
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Featured Posts Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Post 1 -->
                    <article class="bg-white rounded-xl shadow-soft overflow-hidden blog-card animate-fade-in delay-100">
                        <div class="relative aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="10 Books Every Writer Should Read" class="w-full h-full object-cover" loading="lazy" />
                            <div
                                class="absolute top-4 left-4 bg-white/90 text-primary text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                WRITING
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-3 hover:text-primary transition-colors">
                                <a href="#">10 Books Every Writer Should Read in 2023</a>
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Whether you're a seasoned author or just starting your writing journey, these books will
                                inspire and improve your craft.
                            </p>

                            <div class="flex items-center text-sm text-gray-500">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="David Chen"
                                         class="w-8 h-8 rounded-full object-cover mr-2" />
                                    <span>David Chen</span>
                                </div>
                                <span class="mx-2">•</span>
                                <span>Apr 18, 2023</span>
                            </div>
                        </div>
                    </article>

                    <!-- Post 2 -->
                    <article class="bg-white rounded-xl shadow-soft overflow-hidden blog-card animate-fade-in delay-200">
                        <div class="relative aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="How to Build a Personal Brand" class="w-full h-full object-cover" loading="lazy" />
                            <div
                                class="absolute top-4 left-4 bg-white/90 text-primary text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                MARKETING
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-3 hover:text-primary transition-colors">
                                <a href="#">How to Build a Personal Brand That Stands Out</a>
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Learn the essential strategies for creating a personal brand that resonates with your
                                audience and helps you achieve your goals.
                            </p>

                            <div class="flex items-center text-sm text-gray-500">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Maya Rodriguez"
                                         class="w-8 h-8 rounded-full object-cover mr-2" />
                                    <span>Maya Rodriguez</span>
                                </div>
                                <span class="mx-2">•</span>
                                <span>Mar 24, 2023</span>
                            </div>
                        </div>
                    </article>

                    <!-- Post 3 -->
                    <article class="bg-white rounded-xl shadow-soft overflow-hidden blog-card animate-fade-in delay-300">
                        <div class="relative aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1501139083538-0139583c060f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="The Psychology of Color in Marketing" class="w-full h-full object-cover"
                                 loading="lazy" />
                            <div
                                class="absolute top-4 left-4 bg-white/90 text-primary text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                DESIGN
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-3 hover:text-primary transition-colors">
                                <a href="#">The Psychology of Color in Marketing and Branding</a>
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Discover how colors influence consumer behavior and learn to use this knowledge to
                                create more effective marketing campaigns.
                            </p>

                            <div class="flex items-center text-sm text-gray-500">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="James Wilson"
                                         class="w-8 h-8 rounded-full object-cover mr-2" />
                                    <span>James Wilson</span>
                                </div>
                                <span class="mx-2">•</span>
                                <span>Feb 15, 2023</span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="text-center mt-12">
                    <a href="#"
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
                        <a href="#"
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
                        <a href="#"
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
                        <a href="#"
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
                        <a href="#"
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
                        <a href="#"
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
                        <a href="#"
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
                        <a href="#"
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
                        <a href="#"
                           class="text-primary font-medium text-sm flex items-center hover:text-secondary transition-colors">
                            View Articles
                            <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Authors Section -->
        <section id="authors" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in">
                    <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">
                        Meet Our Authors
                    </h2>
                    <p class="text-xl text-gray-600">
                        The talented writers who bring you fresh perspectives and valuable insights
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Author 1 -->
                    <div class="text-center animate-fade-in delay-100">
                        <div class="relative w-32 h-32 mx-auto mb-4 animate-float">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson"
                                 class="w-full h-full object-cover rounded-full border-4 border-white shadow-soft" />
                            <div
                                class="absolute bottom-0 right-0 bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-1">Sarah Johnson</h3>
                        <p class="text-primary mb-3">Technology Writer</p>
                        <p class="text-gray-600 text-sm mb-4">Former tech executive turned writer with insights on the
                            future of work and digital transformation.</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <i class="fas fa-globe"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Author 2 -->
                    <div class="text-center animate-fade-in delay-200">
                        <div class="relative w-32 h-32 mx-auto mb-4 animate-float" style="animation-delay: 1s;">
                            <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="David Chen"
                                 class="w-full h-full object-cover rounded-full border-4 border-white shadow-soft" />
                            <div
                                class="absolute bottom-0 right-0 bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-1">David Chen</h3>
                        <p class="text-primary mb-3">Creative Writing</p>
                        <p class="text-gray-600 text-sm mb-4">Award-winning author and writing coach with a passion for
                            helping others tell their stories.</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <i class="fas fa-globe"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Author 3 -->
                    <div class="text-center animate-fade-in delay-300">
                        <div class="relative w-32 h-32 mx-auto mb-4 animate-float" style="animation-delay: 2s;">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Maya Rodriguez"
                                 class="w-full h-full object-cover rounded-full border-4 border-white shadow-soft" />
                            <div
                                class="absolute bottom-0 right-0 bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-1">Maya Rodriguez</h3>
                        <p class="text-primary mb-3">Marketing Expert</p>
                        <p class="text-gray-600 text-sm mb-4">Digital marketing strategist with over a decade of
                            experience helping brands build authentic connections.</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <i class="fas fa-globe"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Author 4 -->
                    <div class="text-center animate-fade-in delay-400">
                        <div class="relative w-32 h-32 mx-auto mb-4 animate-float" style="animation-delay: 3s;">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="James Wilson"
                                 class="w-full h-full object-cover rounded-full border-4 border-white shadow-soft" />
                            <div
                                class="absolute bottom-0 right-0 bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-1">James Wilson</h3>
                        <p class="text-primary mb-3">Design Thinker</p>
                        <p class="text-gray-600 text-sm mb-4">UX designer and educator focusing on creating experiences
                            that blend beauty with functionality.</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <i class="fab fa-dribbble"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <i class="fas fa-globe"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="#"
                       class="px-6 py-3 border border-gray-300 text-gray-700 rounded-full font-medium hover:bg-gray-50 transition-colors inline-flex items-center animate-fade-in">
                        View All Authors
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Subscribe Section -->
        <section id="subscribe" class="py-20 bg-primary relative overflow-hidden">
            <!-- Background Elements -->
            <div class="absolute top-0 right-0 w-1/3 h-full bg-secondary opacity-30 rounded-l-full blur-3xl -z-10">
            </div>
            <div class="absolute bottom-0 left-0 w-1/4 h-3/4 bg-tertiary opacity-20 rounded-tr-full blur-3xl -z-10">
            </div>

            <div class="container mx-auto px-4 md:px-6">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 animate-fade-in">
                        Never Miss a Story
                    </h2>
                    <p class="text-xl text-white/80 mb-8 max-w-2xl mx-auto animate-fade-in delay-200">
                        Subscribe to our newsletter and get the latest stories, writing tips, and exclusive content
                        delivered straight to your inbox.
                    </p>

                    <form class="max-w-md mx-auto mb-8 animate-fade-in delay-400">
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input type="email" placeholder="Enter your email address"
                                   class="flex-grow px-5 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white/50"
                                   required />
                            <button type="submit"
                                    class="px-5 py-3 bg-white text-primary font-medium rounded-full hover:bg-gray-100 transition-colors shadow-sm">
                                Subscribe
                            </button>
                        </div>
                    </form>

                    <p class="text-white/70 text-sm animate-fade-in delay-600">
                        We respect your privacy. Unsubscribe at any time.
                    </p>
                </div>
            </div>
        </section>

        <!-- Recent Articles Section -->
        <section class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-12">
                    <div class="max-w-2xl mb-6 md:mb-0 animate-fade-in">
                        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">
                            Recent Articles
                        </h2>
                        <p class="text-xl text-gray-600">
                            Fresh perspectives and insights from our community
                        </p>
                    </div>
                    <div class="flex space-x-2 animate-fade-in">
                        <button class="px-4 py-2 bg-primary text-white rounded-full text-sm font-medium">All</button>
                        <button
                            class="px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 rounded-full text-sm font-medium">Technology</button>
                        <button
                            class="px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 rounded-full text-sm font-medium">Writing</button>
                        <button
                            class="px-4 py-2 bg-white text-gray-700 hover:bg-gray-100 rounded-full text-sm font-medium">Design</button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Article 1 -->
                    <article class="bg-white rounded-xl shadow-soft overflow-hidden blog-card animate-fade-in delay-100">
                        <div class="relative aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80"
                                 alt="The Rise of AI in Content Creation"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                 loading="lazy" />
                            <div
                                class="absolute top-4 left-4 bg-white/90 text-primary text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                TECHNOLOGY
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-3 hover:text-primary transition-colors">
                                <a href="#">The Rise of AI in Content Creation: Opportunity or Threat?</a>
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Exploring how artificial intelligence is changing the landscape of content creation and
                                what it means for writers.
                            </p>

                            <div class="flex items-center text-sm text-gray-500">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson"
                                         class="w-8 h-8 rounded-full object-cover mr-2" />
                                    <span>Sarah Johnson</span>
                                </div>
                                <span class="mx-2">•</span>
                                <span>May 10, 2023</span>
                            </div>
                        </div>
                    </article>

                    <!-- Article 2 -->
                    <article class="bg-white rounded-xl shadow-soft overflow-hidden blog-card animate-fade-in delay-200">
                        <div class="relative aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="Finding Your Voice as a Writer"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                 loading="lazy" />
                            <div
                                class="absolute top-4 left-4 bg-white/90 text-primary text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                WRITING
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-3 hover:text-primary transition-colors">
                                <a href="#">Finding Your Voice as a Writer: A Journey of Self-Discovery</a>
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Practical advice on developing your unique writing style and connecting with your
                                authentic voice.
                            </p>

                            <div class="flex items-center text-sm text-gray-500">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="David Chen"
                                         class="w-8 h-8 rounded-full object-cover mr-2" />
                                    <span>David Chen</span>
                                </div>
                                <span class="mx-2">•</span>
                                <span>May 8, 2023</span>
                            </div>
                        </div>
                    </article>

                    <!-- Article 3 -->
                    <article class="bg-white rounded-xl shadow-soft overflow-hidden blog-card animate-fade-in delay-300">
                        <div class="relative aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1164&q=80"
                                 alt="The Psychology of Minimal Design"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                 loading="lazy" />
                            <div
                                class="absolute top-4 left-4 bg-white/90 text-primary text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                DESIGN
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-3 hover:text-primary transition-colors">
                                <a href="#">The Psychology of Minimal Design: Why Less Is More</a>
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Understanding the psychological principles behind minimalism and how it creates more
                                effective designs.
                            </p>

                            <div class="flex items-center text-sm text-gray-500">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="James Wilson"
                                         class="w-8 h-8 rounded-full object-cover mr-2" />
                                    <span>James Wilson</span>
                                </div>
                                <span class="mx-2">•</span>
                                <span>May 5, 2023</span>
                            </div>
                        </div>
                    </article>

                    <!-- Article 4 -->
                    <article class="bg-white rounded-xl shadow-soft overflow-hidden blog-card animate-fade-in delay-400">
                        <div class="relative aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1504805572947-34fad45aed93?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="Building a Personal Brand on Social Media"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                 loading="lazy" />
                            <div
                                class="absolute top-4 left-4 bg-white/90 text-primary text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                MARKETING
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-3 hover:text-primary transition-colors">
                                <a href="#">Building a Personal Brand on Social Media: A Comprehensive Guide</a>
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Step-by-step strategies for establishing and growing your personal brand across
                                different social platforms.
                            </p>

                            <div class="flex items-center text-sm text-gray-500">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Maya Rodriguez"
                                         class="w-8 h-8 rounded-full object-cover mr-2" />
                                    <span>Maya Rodriguez</span>
                                </div>
                                <span class="mx-2">•</span>
                                <span>May 3, 2023</span>
                            </div>
                        </div>
                    </article>

                    <!-- Article 5 -->
                    <article class="bg-white rounded-xl shadow-soft overflow-hidden blog-card animate-fade-in delay-500">
                        <div class="relative aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="Data Privacy in the Digital Age"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                 loading="lazy" />
                            <div
                                class="absolute top-4 left-4 bg-white/90 text-primary text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                TECHNOLOGY
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-3 hover:text-primary transition-colors">
                                <a href="#">Data Privacy in the Digital Age: What You Need to Know</a>
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Understanding the importance of data privacy and how to protect your information online.
                            </p>

                            <div class="flex items-center text-sm text-gray-500">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson"
                                         class="w-8 h-8 rounded-full object-cover mr-2" />
                                    <span>Sarah Johnson</span>
                                </div>
                                <span class="mx-2">•</span>
                                <span>Apr 29, 2023</span>
                            </div>
                        </div>
                    </article>

                    <!-- Article 6 -->
                    <article class="bg-white rounded-xl shadow-soft overflow-hidden blog-card animate-fade-in delay-600">
                        <div class="relative aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                 alt="The Future of Remote Work"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                 loading="lazy" />
                            <div
                                class="absolute top-4 left-4 bg-white/90 text-primary text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                BUSINESS
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-3 hover:text-primary transition-colors">
                                <a href="#">The Future of Remote Work: Trends and Predictions for 2023 and
                                    Beyond</a>
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Exploring how remote work continues to evolve and what it means for businesses and
                                employees.
                            </p>

                            <div class="flex items-center text-sm text-gray-500">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="David Chen"
                                         class="w-8 h-8 rounded-full object-cover mr-2" />
                                    <span>David Chen</span>
                                </div>
                                <span class="mx-2">•</span>
                                <span>Apr 25, 2023</span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="text-center mt-12">
                    <a href="#"
                       class="px-6 py-3 bg-primary text-white rounded-full font-medium hover:bg-secondary transition-colors inline-flex items-center animate-fade-in btn-hover-effect">
                        Load More Articles
                        <i class="fas fa-arrow-down ml-2"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
