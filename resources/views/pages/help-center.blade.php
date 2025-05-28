@extends('layouts.app')
@section('content')
    <main class="container mx-auto px-4 py-16 max-w-7xl">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Help Center</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Find answers to your questions and learn how to get the most out of Blog Hub.
            </p>

            <div class="mt-8 max-w-2xl mx-auto">
                <form id="search-form" action="{{ route('help-center.search') }}" method="GET" class="relative">
                    <input
                        type="text"
                        name="query"
                        id="search-input"
                        placeholder="Search for help articles..."
                        class="w-full px-4 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-Bloghub-500 focus:border-transparent"
                    />
                    <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 bg-Bloghub-600 text-white p-1.5 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/>
                        </svg>
                    </button>
                </form>

                <div id="search-results" class="mt-4 bg-white rounded-lg shadow-md p-4 hidden">
                    <h3 class="font-semibold mb-2">Search Results</h3>
                    <ul id="results-list" class="divide-y divide-gray-100"></ul>
                </div>
            </div>
        </div>

        <div class="mb-16">
            <h2 class="text-2xl font-bold mb-6 text-center">Popular Help Categories</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="h-12 w-12 bg-Bloghub-100 text-Bloghub-600 rounded-md flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/>
                            <polyline points="14 2 14 8 20 8"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Getting Started</h3>
                    <p class="text-gray-600 mb-4">
                        Everything you need to know to start using Blog Hub effectively.
                    </p>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="text-Bloghub-600 hover:underline">Creating your first workspace</a>
                        </li>
                        <li>
                            <a href="#" class="text-Bloghub-600 hover:underline">Inviting team members</a>
                        </li>
                        <li>
                            <a href="#" class="text-Bloghub-600 hover:underline">Setting up your first project</a>
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="h-12 w-12 bg-Bloghub-100 text-Bloghub-600 rounded-md flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                            <path d="M12 17h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">FAQs</h3>
                    <p class="text-gray-600 mb-4">
                        Answers to the most commonly asked questions about Blog Hub.
                    </p>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="text-Bloghub-600 hover:underline">Billing and subscription questions</a>
                        </li>
                        <li>
                            <a href="#" class="text-Bloghub-600 hover:underline">Account settings and security</a>
                        </li>
                        <li>
                            <a href="#" class="text-Bloghub-600 hover:underline">Integrations and API access</a>
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="h-12 w-12 bg-Bloghub-100 text-Bloghub-600 rounded-md flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Tutorials</h3>
                    <p class="text-gray-600 mb-4">
                        Step-by-step guides to help you master all Blog Hub features.
                    </p>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="text-Bloghub-600 hover:underline">Creating custom workflows</a>
                        </li>
                        <li>
                            <a href="#" class="text-Bloghub-600 hover:underline">Using advanced reporting features</a>
                        </li>
                        <li>
                            <a href="#" class="text-Bloghub-600 hover:underline">Automating repetitive tasks</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-md mb-16">
            <h2 class="text-2xl font-bold mb-6">Still Need Help?</h2>

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <div class="h-12 w-12 bg-Bloghub-100 text-Bloghub-600 rounded-md flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Contact Support</h3>
                    <p class="text-gray-600 mb-4">
                        Our support team is ready to assist you with any questions or issues.
                    </p>
                    <a href="{{ route('contact') }}" class="btn-primary">Contact Us</a>
                </div>

                <div>
                    <div class="h-12 w-12 bg-Bloghub-100 text-Bloghub-600 rounded-md flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Community Forum</h3>
                    <p class="text-gray-600 mb-4">
                        Connect with other Blog Hub users to share tips and get advice.
                    </p>
                    <a href="#" class="btn-primary">Join Community</a>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchForm = document.getElementById('search-form');
            const searchInput = document.getElementById('search-input');
            const searchResults = document.getElementById('search-results');
            const resultsList = document.getElementById('results-list');

            // Mock data for search results - in a real app, this would come from the server
            const helpArticles = [
                { title: 'How to create your first workspace', url: '#workspace' },
                { title: 'Inviting team members to your project', url: '#invite-team' },
                { title: 'Setting up your project structure', url: '#project-setup' },
                { title: 'Using advanced reporting features', url: '#reporting' },
                { title: 'Managing team permissions', url: '#permissions' },
                { title: 'Billing and subscription FAQs', url: '#billing' },
                { title: 'API integration guide', url: '#api-guide' },
                { title: 'Account security best practices', url: '#security' }
            ];

            // Handle form submission
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const query = searchInput.value.toLowerCase().trim();

                if (query.length < 2) {
                    searchResults.classList.add('hidden');
                    return;
                }

                // Filter results based on query
                const filteredResults = helpArticles.filter(article =>
                    article.title.toLowerCase().includes(query)
                );

                // Display results
                resultsList.innerHTML = '';

                if (filteredResults.length === 0) {
                    resultsList.innerHTML = '<li class="py-2">No results found. Try a different search term.</li>';
                } else {
                    filteredResults.forEach(result => {
                        const li = document.createElement('li');
                        li.className = 'py-2';
                        li.innerHTML = `<a href="${result.url}" class="text-Bloghub-600 hover:underline">${result.title}</a>`;
                        resultsList.appendChild(li);
                    });
                }

                searchResults.classList.remove('hidden');
            });

            // Hide results when clicking outside
            document.addEventListener('click', function(e) {
                if (!searchForm.contains(e.target)) {
                    searchResults.classList.add('hidden');
                }
            });

            // Real-time search as user types
            searchInput.addEventListener('input', function() {
                const query = searchInput.value.toLowerCase().trim();

                if (query.length < 2) {
                    searchResults.classList.add('hidden');
                    return;
                }

                // Trigger the search
                const event = new Event('submit');
                searchForm.dispatchEvent(event);
            });
        });
    </script>
@endsection
