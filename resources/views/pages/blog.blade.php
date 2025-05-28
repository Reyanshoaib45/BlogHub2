
@extends('layouts.app')

@section('content')
<main class="container mx-auto px-4 py-16 max-w-7xl">
    <div class="text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Blog Hub Blogs</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Insights, tips, and news about productivity and team collaboration
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
            <img
                src="https://images.unsplash.com/photo-1517048676732-d65bc937f952"
                alt="Team collaboration"
                class="w-full h-48 object-cover"
            />
            <div class="p-6">
                <span class="text-Bloghub-600 text-sm font-medium">Productivity</span>
                <h3 class="text-xl font-bold mt-2 mb-3">10 Ways to Boost Your Team's Productivity</h3>
                <p class="text-gray-600 mb-4">
                    Discover practical strategies to enhance collaboration and efficiency within your team.
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden mr-2">
                            <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5" alt="Author" class="h-full w-full object-cover" />
                        </div>
                        <span class="text-sm text-gray-600">Michael Roberts</span>
                    </div>
                    <span class="text-sm text-gray-500">June 15, 2023</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
            <img
                src="https://images.unsplash.com/photo-1552664730-d307ca884978"
                alt="Meeting"
                class="w-full h-48 object-cover"
            />
            <div class="p-6">
                <span class="text-Bloghub-600 text-sm font-medium">Remote Work</span>
                <h3 class="text-xl font-bold mt-2 mb-3">The Future of Remote Work: Trends to Watch</h3>
                <p class="text-gray-600 mb-4">
                    How remote work is evolving and what your organization needs to know to stay ahead.
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden mr-2">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330" alt="Author" class="h-full w-full object-cover" />
                        </div>
                        <span class="text-sm text-gray-600">Sarah Chen</span>
                    </div>
                    <span class="text-sm text-gray-500">May 28, 2023</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
            <img
                src="https://images.unsplash.com/photo-1499750310107-5fef28a66643"
                alt="Project planning"
                class="w-full h-48 object-cover"
            />
            <div class="p-6">
                <span class="text-Bloghub-600 text-sm font-medium">Project Management</span>
                <h3 class="text-xl font-bold mt-2 mb-3">Agile vs. Waterfall: Choosing the Right Methodology</h3>
                <p class="text-gray-600 mb-4">
                    A comprehensive comparison to help you select the best approach for your projects.
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden mr-2">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7" alt="Author" class="h-full w-full object-cover" />
                        </div>
                        <span class="text-sm text-gray-600">David Patel</span>
                    </div>
                    <span class="text-sm text-gray-500">May 12, 2023</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
            <img
                src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0"
                alt="Data analytics"
                class="w-full h-48 object-cover"
            />
            <div class="p-6">
                <span class="text-Bloghub-600 text-sm font-medium">Analytics</span>
                <h3 class="text-xl font-bold mt-2 mb-3">How to Use Data to Improve Team Performance</h3>
                <p class="text-gray-600 mb-4">
                    Leverage analytics to identify bottlenecks and optimize your team's workflow.
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden mr-2">
                            <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e" alt="Author" class="h-full w-full object-cover" />
                        </div>
                        <span class="text-sm text-gray-600">Emma Wilson</span>
                    </div>
                    <span class="text-sm text-gray-500">April 30, 2023</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
            <img
                src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3"
                alt="Integrations"
                class="w-full h-48 object-cover"
            />
            <div class="p-6">
                <span class="text-Bloghub-600 text-sm font-medium">Integrations</span>
                <h3 class="text-xl font-bold mt-2 mb-3">5 Essential Tool Integrations for Every Team</h3>
                <p class="text-gray-600 mb-4">
                    Connect your favorite tools to create a seamless workflow and boost productivity.
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden mr-2">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d" alt="Author" class="h-full w-full object-cover" />
                        </div>
                        <span class="text-sm text-gray-600">James Johnson</span>
                    </div>
                    <span class="text-sm text-gray-500">April 15, 2023</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
            <img
                src="https://images.unsplash.com/photo-1551434678-e076c223a692"
                alt="Company culture"
                class="w-full h-48 object-cover"
            />
            <div class="p-6">
                <span class="text-Bloghub-600 text-sm font-medium">Company Culture</span>
                <h3 class="text-xl font-bold mt-2 mb-3">Building a Culture of Collaboration</h3>
                <p class="text-gray-600 mb-4">
                    How to foster a workplace environment that encourages teamwork and innovation.
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden mr-2">
                            <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e" alt="Author" class="h-full w-full object-cover" />
                        </div>
                        <span class="text-sm text-gray-600">Sophia Martinez</span>
                    </div>
                    <span class="text-sm text-gray-500">March 28, 2023</span>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center">
        <button class="bg-Bloghub-600 text-white px-6 py-3 rounded-md hover:bg-Bloghub-700 transition-colors">
            Load More Articles
        </button>
    </div>
</main>
@endsection
