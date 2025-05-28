
@extends('layouts.app')

@section('content')
<main class="container mx-auto px-4 py-16 max-w-3xl">
    <div class="text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Changelog</h1>
        <p class="text-xl text-gray-600">
            Keep track of all the updates and improvements to Blog Hub
        </p>
    </div>

    <div class="space-y-12">
        <div class="border-l-4 border-Bloghub-500 pl-6 relative">
            <div class="absolute -left-3 top-0 h-6 w-6 rounded-full bg-Bloghub-500 flex items-center justify-center">
                <div class="h-2 w-2 rounded-full bg-white"></div>
            </div>
            <div class="mb-2">
                <span class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full mr-2">New Features</span>
                <span class="text-gray-500 text-sm">June 15, 2023</span>
            </div>
            <h2 class="text-2xl font-bold mb-3">Version 2.5.0</h2>
            <div class="space-y-3 text-gray-700">
                <p>We're excited to announce our biggest update yet! Version 2.5.0 includes several major features and improvements:</p>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Added new dashboard analytics with customizable widgets</li>
                    <li>Launched our mobile app for iOS and Android</li>
                    <li>Improved task management with subtasks and dependencies</li>
                    <li>Added six new integrations including Salesforce and Microsoft Teams</li>
                    <li>Redesigned the user interface for better usability on all devices</li>
                </ul>
            </div>
        </div>

        <div class="border-l-4 border-Bloghub-500 pl-6 relative">
            <div class="absolute -left-3 top-0 h-6 w-6 rounded-full bg-Bloghub-500 flex items-center justify-center">
                <div class="h-2 w-2 rounded-full bg-white"></div>
            </div>
            <div class="mb-2">
                <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded-full mr-2">Improvements</span>
                <span class="text-gray-500 text-sm">May 22, 2023</span>
            </div>
            <h2 class="text-2xl font-bold mb-3">Version 2.4.2</h2>
            <div class="space-y-3 text-gray-700">
                <p>This update focuses on performance improvements and bug fixes:</p>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Optimized loading times across the platform</li>
                    <li>Enhanced search functionality with better results ranking</li>
                    <li>Improved file upload system with better error handling</li>
                    <li>Fixed several UI issues on smaller screens</li>
                </ul>
            </div>
        </div>

        <div class="border-l-4 border-Bloghub-500 pl-6 relative">
            <div class="absolute -left-3 top-0 h-6 w-6 rounded-full bg-Bloghub-500 flex items-center justify-center">
                <div class="h-2 w-2 rounded-full bg-white"></div>
            </div>
            <div class="mb-2">
                <span class="inline-block bg-purple-100 text-purple-800 text-xs font-semibold px-2 py-1 rounded-full mr-2">New Features</span>
                <span class="text-gray-500 text-sm">April 8, 2023</span>
            </div>
            <h2 class="text-2xl font-bold mb-3">Version 2.4.0</h2>
            <div class="space-y-3 text-gray-700">
                <p>We're thrilled to introduce several new features in this release:</p>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Added team workspaces for better project organization</li>
                    <li>Introduced custom fields for tasks and projects</li>
                    <li>Added advanced filtering options for task lists</li>
                    <li>Implemented a new notification center with customizable alerts</li>
                </ul>
            </div>
        </div>

        <div class="border-l-4 border-Bloghub-500 pl-6 relative">
            <div class="absolute -left-3 top-0 h-6 w-6 rounded-full bg-Bloghub-500 flex items-center justify-center">
                <div class="h-2 w-2 rounded-full bg-white"></div>
            </div>
            <div class="mb-2">
                <span class="inline-block bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded-full mr-2">Bug Fixes</span>
                <span class="text-gray-500 text-sm">March 15, 2023</span>
            </div>
            <h2 class="text-2xl font-bold mb-3">Version 2.3.5</h2>
            <div class="space-y-3 text-gray-700">
                <p>This maintenance release addresses several issues:</p>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Fixed an issue where task assignments weren't sending email notifications</li>
                    <li>Resolved calendar sync problems with Google Calendar</li>
                    <li>Fixed a UI bug affecting comment threads on large projects</li>
                    <li>Addressed performance issues when generating reports</li>
                </ul>
            </div>
        </div>

        <div class="border-l-4 border-Bloghub-500 pl-6 relative">
            <div class="absolute -left-3 top-0 h-6 w-6 rounded-full bg-Bloghub-500 flex items-center justify-center">
                <div class="h-2 w-2 rounded-full bg-white"></div>
            </div>
            <div class="mb-2">
                <span class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full mr-2">New Features</span>
                <span class="text-gray-500 text-sm">February 1, 2023</span>
            </div>
            <h2 class="text-2xl font-bold mb-3">Version 2.3.0</h2>
            <div class="space-y-3 text-gray-700">
                <ul class="list-disc pl-5 space-y-2">
                    <li>Introduced time tracking capabilities for tasks</li>
                    <li>Added resource allocation features for team management</li>
                    <li>Implemented a new reporting engine with customizable templates</li>
                    <li>Added support for file versioning</li>
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection
