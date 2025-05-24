@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="bg-gradient-to-r from-purple-600 to-indigo-600 h-32 md:h-64 flex items-center">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 w-full">
                    <h1 class="text-3xl md:text-5xl font-bold text-white">About BlogHub</h1>
                </div>
            </div>

            <div class="p-6 md:p-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div class="space-y-6">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Our Story</h2>
                        <p class="text-gray-600">
                            Founded in 2020, BlogHub began with a simple mission: to help teams collaborate more
                            effectively.
                            What started as a small project between friends has grown into a comprehensive platform used by
                            organizations around the world.
                        </p>
                        <p class="text-gray-600">
                            Our team is passionate about creating tools that simplify complex workflows and empower people
                            to
                            focus on what matters most. We believe in building software that's not just powerful, but also
                            intuitive and enjoyable to use.
                        </p>

                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 pt-6">Our Values</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="border border-gray-200 rounded-lg p-6 bg-gray-50">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Simplicity</h3>
                                <p class="text-gray-600">We believe in elegant solutions that strip away complexity and
                                    focus on what's essential.</p>
                            </div>
                            <div class="border border-gray-200 rounded-lg p-6 bg-gray-50">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Transparency</h3>
                                <p class="text-gray-600">Open communication and honesty build trust with our users and
                                    within our team.</p>
                            </div>
                            <div class="border border-gray-200 rounded-lg p-6 bg-gray-50">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Innovation</h3>
                                <p class="text-gray-600">We're constantly exploring new ideas and technologies to improve
                                    our platform.</p>
                            </div>
                            <div class="border border-gray-200 rounded-lg p-6 bg-gray-50">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">User-Centered</h3>
                                <p class="text-gray-600">Everything we build starts with understanding our users' needs and
                                    challenges.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="rounded-lg overflow-hidden mb-8">
                            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c" alt="Team collaboration"
                                 class="w-full h-auto object-cover">
                        </div>

                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Our Team</h2>
                        <p class="text-gray-600 mb-6">
                            We're a diverse group of designers, developers, and problem-solvers united by our passion for
                            creating
                            exceptional software. While we're distributed across multiple countries, we share a common goal:
                            building tools that make work better.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            <div class="text-center">
                                <div class="w-24 h-24 mx-auto rounded-full overflow-hidden bg-gray-200 mb-3">
                                    <img src="https://images.unsplash.com/photo-1605810230434-7631ac76ec81"
                                         alt="Team member" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-semibold text-gray-900">Leadership</h4>
                            </div>
                            <div class="text-center">
                                <div class="w-24 h-24 mx-auto rounded-full overflow-hidden bg-gray-200 mb-3">
                                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158"
                                         alt="Team member" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-semibold text-gray-900">Engineering</h4>
                            </div>
                            <div class="text-center">
                                <div class="w-24 h-24 mx-auto rounded-full overflow-hidden bg-gray-200 mb-3">
                                    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d"
                                         alt="Team member" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-semibold text-gray-900">Design</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
