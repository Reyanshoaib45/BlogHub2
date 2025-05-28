@extends('layouts.app')

@section('content')
<main class="container mx-auto px-4 py-16 max-w-7xl">
    <div class="text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Join Our Team</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Build the future of productivity with us
        </p>
    </div>

    <div class="bg-white p-8 rounded-lg shadow-md mb-12">
        <h2 class="text-2xl font-bold mb-4">Why Work at Blog Hub?</h2>
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            <div>
                <div class="h-12 w-12 bg-Bloghub-100 text-Bloghub-600 rounded-md flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="8" height="8" x="2" y="2" rx="2"/><path d="M14 2c1.1 0 2 .9 2 2v4c0 1.1-.9 2-2 2"/><path d="M20 2c1.1 0 2 .9 2 2v4c0 1.1-.9 2-2 2"/><path d="M8 14a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h4c1.1 0 2-.9 2-2"/><path d="M14 14c1.1 0 2 .9 2 2v4c0 1.1-.9 2-2 2"/><path d="M20 14c1.1 0 2 .9 2 2v4c0 1.1-.9 2-2 2"/></svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Innovative Culture</h3>
                <p class="text-gray-600">
                    We're pushing the boundaries of what's possible in productivity software.
                </p>
            </div>

            <div>
                <div class="h-12 w-12 bg-Bloghub-100 text-Bloghub-600 rounded-md flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.5 20H8"/><path d="M17 9h.01"/><rect width="10" height="16" x="7" y="4" rx="2"/><path d="M11 4h2"/><path d="M12 18.5v.5"/></svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Remote-First</h3>
                <p class="text-gray-600">
                    Work from anywhere in the world with our distributed team setup.
                </p>
            </div>

            <div>
                <div class="h-12 w-12 bg-Bloghub-100 text-Bloghub-600 rounded-md flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Competitive Benefits</h3>
                <p class="text-gray-600">
                    Generous compensation, equity, healthcare, and unlimited PTO.
                </p>
            </div>
        </div>
    </div>

    <div class="mb-16">
        <h2 class="text-2xl font-bold mb-6 text-center">Open Positions</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:border-Bloghub-200 transition-all">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-4">
                    <div>
                        <h3 class="text-xl font-semibold">Senior Frontend Engineer</h3>
                        <p class="text-gray-500 mb-3">Engineering • Remote • Full-time</p>
                        <p class="text-gray-700">Help build the future of our React-based application with a focus on performance and accessibility.</p>
                    </div>
                    <a href="#" class="btn-primary whitespace-nowrap">Apply Now</a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:border-Bloghub-200 transition-all">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-4">
                    <div>
                        <h3 class="text-xl font-semibold">Product Designer</h3>
                        <p class="text-gray-500 mb-3">Design • Remote • Full-time</p>
                        <p class="text-gray-700">Create beautiful, intuitive interfaces that help users be more productive and efficient.</p>
                    </div>
                    <a href="#" class="btn-primary whitespace-nowrap">Apply Now</a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:border-Bloghub-200 transition-all">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-4">
                    <div>
                        <h3 class="text-xl font-semibold">DevOps Engineer</h3>
                        <p class="text-gray-500 mb-3">Engineering • Remote • Full-time</p>
                        <p class="text-gray-700">Build and maintain our cloud infrastructure with a focus on scalability and security.</p>
                    </div>
                    <a href="#" class="btn-primary whitespace-nowrap">Apply Now</a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:border-Bloghub-200 transition-all">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-4">
                    <div>
                        <h3 class="text-xl font-semibold">Customer Success Manager</h3>
                        <p class="text-gray-500 mb-3">Customer Success • Remote • Full-time</p>
                        <p class="text-gray-700">Help our customers get the most out of Blog Hub and ensure they're successful.</p>
                    </div>
                    <a href="#" class="btn-primary whitespace-nowrap">Apply Now</a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:border-Bloghub-200 transition-all">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-4">
                    <div>
                        <h3 class="text-xl font-semibold">Backend Engineer</h3>
                        <p class="text-gray-500 mb-3">Engineering • Remote • Full-time</p>
                        <p class="text-gray-700">Build robust, scalable APIs and services that power our application.</p>
                    </div>
                    <a href="#" class="btn-primary whitespace-nowrap">Apply Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-Bloghub-50 p-8 rounded-lg text-center">
        <h2 class="text-2xl font-bold mb-4">Don't see a position that fits?</h2>
        <p class="text-gray-700 mb-6 max-w-2xl mx-auto">
            We're always on the lookout for talented individuals to join our team. Send us your resume and we'll keep it on file for future opportunities.
        </p>
        <a href="#" class="btn-primary">Send General Application</a>
    </div>
</main>
@endsection
