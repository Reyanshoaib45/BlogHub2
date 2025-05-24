
@extends('layouts.app')

@section('content')
<main class="container mx-auto px-4 py-16 max-w-7xl">
    <div class="text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Documentation</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Everything you need to know about using Blog Hub effectively
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <div class="lg:col-span-1 bg-white p-6 rounded-lg shadow-sm border border-gray-100">
            <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
            <ul class="space-y-3">
                <li><a href="#getting-started" class="text-streamline-600 hover:underline">Getting Started</a></li>
                <li><a href="#user-guide" class="text-streamline-600 hover:underline">User Guide</a></li>
                <li><a href="#faq" class="text-streamline-600 hover:underline">FAQs</a></li>
            </ul>

            <h3 class="text-lg font-semibold mt-8 mb-4">Popular Topics</h3>
            <div class="flex flex-wrap gap-2">
                <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Task Management</span>
                <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Integrations</span>
                <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Automation</span>
                <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Reporting</span>
                <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Team Management</span>
            </div>
        </div>

        <div class="lg:col-span-3 space-y-8">
            <section id="getting-started" class="bg-white p-8 rounded-lg shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold mb-6">Getting Started</h2>

                <div class="mb-6 border-b border-gray-200">
                    <nav class="flex -mb-px">
                        <button class="py-2 px-4 border-b-2 border-streamline-500 text-streamline-600 font-medium">
                            Initial Setup
                        </button>
                    </nav>
                </div>

                <div class="space-y-4">
                    <p class="text-gray-700">Follow these steps to set up your BlogHubaccount:</p>
                    <ol class="list-decimal pl-5 space-y-3 text-gray-700">
                        <li>Sign up for an account on the Blog Hub website.</li>
                        <li>Verify your email address.</li>
                        <li>Complete your profile information.</li>
                        <li>Select your workspace preferences.</li>
                        <li>Connect any integrations you want to use.</li>
                    </ol>
                    <p class="text-gray-700 mt-4">
                        Once you've completed these steps, you'll be ready to create your first project.
                    </p>
                </div>
            </section>

            <section id="user-guide" class="bg-white p-8 rounded-lg shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold mb-6">User Guide</h2>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold mb-3">Navigation</h3>
                        <p class="text-gray-700">
                            Learn how to navigate the BlogHubinterface efficiently. The main navigation menu is located on the left side of the screen and provides access to all key features.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-3">Task Management</h3>
                        <p class="text-gray-700">
                            Create, assign, and track tasks with ease. Set priorities, due dates, and monitor progress through customizable dashboards.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-3">Collaboration Tools</h3>
                        <p class="text-gray-700">
                            Use comments, mentions, and file sharing to collaborate effectively with your team. Real-time updates ensure everyone stays in the loop.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-3">Reporting & Analytics</h3>
                        <p class="text-gray-700">
                            Generate reports to track productivity, resource allocation, and project progress. Export data in various formats for further analysis.
                        </p>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="#" class="text-streamline-600 hover:underline flex items-center">
                        <span>View full user guide</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </section>

            <section id="api-docs" class="bg-white p-8 rounded-lg shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold mb-6">API Documentation</h2>
                <p class="text-gray-700 mb-4">
                    BlogHuboffers a comprehensive API for developers who want to build custom integrations or extend platform functionality.
                </p>

                <div class="bg-gray-50 p-4 rounded-md mb-6 font-mono text-sm">
                    <pre>GET /api/v1/projects
Authorization: Bearer YOUR_API_KEY
Accept: application/json</pre>
                </div>

                <p class="text-gray-700 mb-6">
                    Our REST API supports all standard HTTP methods and returns JSON responses. Authentication is handled via API keys or OAuth 2.0.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="border border-gray-200 p-4 rounded-md">
                        <h4 class="font-semibold mb-2">Authentication</h4>
                        <p class="text-sm text-gray-600">Learn how to authenticate API requests and manage API keys.</p>
                    </div>

                    <div class="border border-gray-200 p-4 rounded-md">
                        <h4 class="font-semibold mb-2">Resources</h4>
                        <p class="text-sm text-gray-600">Explore available API endpoints and resource representations.</p>
                    </div>

                    <div class="border border-gray-200 p-4 rounded-md">
                        <h4 class="font-semibold mb-2">Webhooks</h4>
                        <p class="text-sm text-gray-600">Configure webhooks to receive real-time notifications about events.</p>
                    </div>

                    <div class="border border-gray-200 p-4 rounded-md">
                        <h4 class="font-semibold mb-2">SDK & Libraries</h4>
                        <p class="text-sm text-gray-600">Use our official SDKs for popular programming languages.</p>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="#" class="text-streamline-600 hover:underline flex items-center">
                        <span>Read Again documentation</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </section>
        </div>
    </div>
</main>
@endsection
