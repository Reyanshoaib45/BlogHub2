<header id="navbar" style="background: white; top:0; "
        class="fixed  left-0 right-0 z-50 py-4 transition-all duration-300 ease-in-out p-4">
    <div class="blog-container">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex">
{{--                <img src="{{ asset('f.jpg') }}"style="border-radius: 100%;width: 30px;height: 30px; margin-right:6px;">--}}
{{--                <a href="{{ route('home') }}" class="flex items-center">--}}
{{--                    <h1 class="text-2xl font-bold tracking-tight text-black">Pencraft</h1>--}}
{{--                </a>--}}
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <div class="h-9 w-9 rounded-full bg-primary flex items-center justify-center">
                        <span class="text-white font-bold text-lg">B</span>
                    </div>
                    <span class="font-bold text-xl text-dark">BlogHub</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}"
                   class="text-lg font-medium text-black hover:text-gray-600 transition-colors">Home</a>
                <a href="{{ route('blog.index') }}"
                   class="text-lg font-medium text-black hover:text-gray-600 transition-colors">Blog</a>
                <a href="{{ route('contact') }}"
                   class="text-lg font-medium text-black hover:text-gray-600 transition-colors">Contact</a>
                <a href="{{ route('about') }}"
                   class="text-lg font-medium text-black hover:text-gray-600 transition-colors">About</a>

                <div class="hidden md:flex items-center space-x-4">
                    @guest
                        <a href="{{ route('login') }}"
                           class="ml-2 bg-black hover:bg-gray-800 text-white px-4 py-2 rounded-md transition-colors">
                            Sign in
                        </a>
                        <a href="{{ route('register') }}"
                           class="ml-2 bg-black hover:bg-gray-800 text-white px-4 py-2 rounded-md transition-colors">
                            Get Started
                        </a>
                    @else
                        <a href="{{ route('dashboard') }}"
                           class="ml-2 bg-black hover:bg-gray-800 text-white px-4 py-2 rounded-md transition-colors">
                            Dashboard
                        </a>
                        @if (Auth::user()->is_admin)
                            <a href="{{ route('admin.dashboard') }}"
                               class="ml-2 bg-black hover:bg-gray-800 text-white px-4 py-2 rounded-md transition-colors">
                                Admin
                            </a>
                        @endif
                    @endguest
                </div>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="p-2 rounded-full hover:bg-gray-100 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <nav id="mobile-menu" class="md:hidden pt-4 pb-2 hidden">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('home') }}"
                   class="text-lg font-medium text-black hover:text-gray-600 transition-colors">Home</a>
                <a href="{{ route('blog.index') }}"
                   class="text-lg font-medium text-black hover:text-gray-600 transition-colors">Blog</a>
                <a href="{{ route('contact') }}"
                   class="text-lg font-medium text-black hover:text-gray-600 transition-colors">Contact</a>
                <a href="{{ route('about') }}"
                   class="text-lg font-medium text-black hover:text-gray-600 transition-colors">About</a>
            </div>
            <div class="d-flex justify-end border-t pt-2 mt-2">
                @guest
                    <a href="{{ route('login') }}"
                       class="ml-2 bg-black hover:bg-gray-800 text-white px-4 py-2 rounded-md transition-colors">
                        Sign in
                    </a>
                    <a href="{{ route('register') }}"
                       class="ml-2 bg-black hover:bg-gray-800 text-white px-4 py-2 rounded-md transition-colors">
                        Get Started
                    </a>
                @else
                    <a href="{{ route('dashboard') }}"
                       class="ml-2 bg-black hover:bg-gray-800 text-white px-4 py-2 rounded-md transition-colors">
                        Dashboard
                    </a>
                    @if (Auth::user()->is_admin)
                        <a href="{{ route('admin.dashboard') }}"
                           class="ml-2 bg-black hover:bg-gray-800 text-white px-4 py-2 rounded-md transition-colors">
                            Admin
                        </a>
                    @endif
                @endguest
            </div>
        </nav>
    </div>
</header>
