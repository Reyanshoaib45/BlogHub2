<footer class="bg-white pt-16 pb-8 border-t border-gray-100 p-4">
    <div class="blog-container">
        <div class="grid grid-cols-1 md:grid-cols-6 gap-8 mb-12">
            <!-- Logo and description -->
            <div class="md:col-span-2">
                <div class="flex pb-2">
{{--                    <img--}}
{{--                        src="{{ asset('f.jpg') }}"style="border-radius: 100%;width: 30px;height: 30px; margin-right:6px;">--}}
{{--                    <a href="{{ route('home') }}" class="flex items-center">--}}
{{--                        <h1 class="text-2xl font-bold tracking-tight text-black">Blog Hub</h1>--}}
{{--                    </a>--}}
                    <a href="{{ route('home') }}" class="flex items-center gap-2">
                        <div class="h-9 w-9 rounded-full bg-primary flex items-center justify-center">
                            <span class="text-white font-bold text-lg">B</span>
                        </div>
                        <span class="font-bold text-xl text-dark">BlogHub</span>
                    </a>
                </div>
                <p class="text-gray-600 mb-6 pr-4">
                    Empowering writers and content creators with the tools they need to engage, inspire, and inform
                    their audience.
                </p>
                <div class="flex space-x-3">
                    <!-- Twitter -->
                    <a href="https://x.com/Blog HubOFFICAL" target="_blank"
                       class="p-2 border border-gray-200 rounded-full hover:bg-gray-100 hover:text-black transition-colors"
                       aria-label="Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                            </path>
                        </svg>
                    </a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/OfficialBlog Hub?mibextid=qi2Omg&rdid=wPVVEh7FwCDAnWCo&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1AQwGsXmTi%2F%3Fmibextid%3Dqi2Omg#"
                       target="_blank"
                       class="p-2 border border-gray-200 rounded-full hover:bg-gray-100 hover:text-black transition-colors"
                       aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/Blog Hub_official?igsh=NnFsMWNqZHhodzVj" target="_blank"
                       class="p-2 border border-gray-200 rounded-full hover:bg-gray-100 hover:text-black transition-colors"
                       aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/Blog Hub-offical-bb1412364/" target="_blank"
                       class="p-2 border border-gray-200 rounded-full hover:bg-gray-100 hover:text-black transition-colors"
                       aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                            </path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Footer links -->
            <!-- Platform -->
            <div class="md:col-span-1">
                <h3 class="font-semibold text-sm uppercase tracking-wider text-gray-900 mb-4">
                    Products
                </h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('features') }}"
                           class="text-gray-600 hover:text-streamline-600 transition-colors">Features</a></li>
                    <li><a href="{{ route('writing.tips') }}"
                           class="text-gray-600 hover:text-streamline-600 transition-colors">Writing Tips</a></li>
                    <li><a href="{{ route('changelog') }}"
                           class="text-gray-600 hover:text-streamline-600 transition-colors">Changelog</a></li>
                    {{-- <li><a href="{{ route('writing.tips') }}"
                            class="text-gray-600 hover:text-streamline-600 transition-colors">Changelog</a></li> --}}
                    <li><a href="{{ route('documentation') }}"
                           class="text-gray-600 hover:text-streamline-600 transition-colors">Documentation</a></li>
                </ul>
            </div>


            <!-- Resources -->
            <div class="md:col-span-1">
                <h3 class="font-semibold text-sm uppercase tracking-wider text-gray-900 mb-4">
                    Resources
                </h3>
                <ul class="space-y-3">
                    {{-- <li><a href="{{ route('help-center') }}"
                            class="text-gray-600 hover:text-streamline-600 transition-colors">Help Center</a></li> --}}
                    <li><a href="{{ route('contact') }}"
                           class="text-gray-600 hover:text-streamline-600 transition-colors">Contact Us</a></li>
                    <li><a href="{{ route('privacy') }}"
                           class="text-gray-600 hover:text-streamline-600 transition-colors">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}"
                           class="text-gray-600 hover:text-streamline-600 transition-colors">Terms of Service</a></li>
                    {{-- <li><a href="{{ route('status') }}"
                            class="text-gray-600 hover:text-streamline-600 transition-colors">Status</a></li> --}}
                </ul>
            </div>

            <!-- Company -->
            <div class="md:col-span-1">
                <h3 class="font-semibold text-sm uppercase tracking-wider text-gray-900 mb-4">
                    Company
                </h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('about') }}"
                           class="text-gray-600 hover:text-streamline-600 transition-colors">About Us</a></li>
                    <li><a href="{{ route('blog.index') }}"
                           class="text-gray-600 hover:text-streamline-600 transition-colors">Blog</a></li>
                    <li><a href="{{ route('careers') }}"
                           class="text-gray-600 hover:text-streamline-600 transition-colors">Careers</a></li>
                    <li><a href="{{ route('customers') }}"
                           class="text-gray-600 hover:text-streamline-600 transition-colors">Customers</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div class="md:col-span-1">
                <h3 class="font-semibold text-sm uppercase tracking-wider text-gray-900 mb-4">
                    Legal
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('privacy') }}"
                           class="text-sm text-gray-500 hover:text-streamline-600 transition-colors">Privacy
                            Policy</a>

                    </li>
                    <li>
                        <a href="{{ route('terms') }}"
                           class="text-sm text-gray-500 hover:text-streamline-600 transition-colors">Terms of
                            Service</a>

                    </li>
                    <li>
                        <a href="{{ route('features') }}"
                           class="text-sm text-gray-500 hover:text-streamline-600 transition-colors">Cookie Policy</a>

                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright + CTA -->
        <div
            class="pt-8 border-t border-gray-100 flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0">
            <p class="text-gray-500 text-sm">
                &copy; <span id="current-year">2023</span> Blog Hub. All rights reserved.
            </p>

            <div class="flex items-center space-x-2">
                @guest
                    <span class="text-sm text-gray-500">
                        Want to get started?
                    </span>
                    <a href="{{ route('register') }}" class="text-black hover:text-gray-600 flex items-center">
                        Create an account
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                @else
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-black hover:text-gray-600 flex items-center">
                            Sign out
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                    </form>

                @endguest
            </div>
        </div>
    </div>
