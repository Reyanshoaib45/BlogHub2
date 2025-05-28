@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-10 max-w-5xl">
        <div class="animate-fade-in">
            <h1 class="text-3xl md:text-4xl font-bold mb-8 text-Bloghub-800">Writing Tips & Resources</h1>

            <div class="bg-white shadow-sm rounded-lg p-6 mb-8">
                <h2 class="text-xl font-semibold mb-6 text-Bloghub-700">Essential Writing Tips</h2>

                <div class="space-y-6 mb-8">
                    <div class="border-l-4 border-Bloghub-500 pl-4 py-2">
                        <h3 class="font-semibold text-lg mb-2">Start with an Outline</h3>
                        <p class="text-gray-700">
                            Before you begin writing, create a clear outline of your main points. This provides structure and prevents you from going off-topic.
                        </p>
                    </div>

                    <div class="border-l-4 border-Bloghub-500 pl-4 py-2">
                        <h3 class="font-semibold text-lg mb-2">Know Your Audience</h3>
                        <p class="text-gray-700">
                            Understand who you're writing for and adjust your tone, language, and complexity accordingly. What works for experts won't work for beginners.
                        </p>
                    </div>

                    <div class="border-l-4 border-Bloghub-500 pl-4 py-2">
                        <h3 class="font-semibold text-lg mb-2">Write First, Edit Later</h3>
                        <p class="text-gray-700">
                            Get your thoughts down without worrying about perfection. You can always refine your work during the editing phase.
                        </p>
                    </div>

                    <div class="border-l-4 border-Bloghub-500 pl-4 py-2">
                        <h3 class="font-semibold text-lg mb-2">Use Active Voice</h3>
                        <p class="text-gray-700">
                            Active voice makes your writing more direct and engaging. Instead of "The report was written," say "I wrote the report."
                        </p>
                    </div>

                    <div class="border-l-4 border-Bloghub-500 pl-4 py-2">
                        <h3 class="font-semibold text-lg mb-2">Be Concise</h3>
                        <p class="text-gray-700">
                            Eliminate unnecessary words and phrases. Good writing is clear and to the point, not padded with fluff.
                        </p>
                    </div>
                </div>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">The Writing Process</h2>

                <ol class="space-y-6 mb-8">
                    <li class="bg-Bloghub-50 p-4 rounded-md">
                        <h3 class="font-semibold text-lg mb-2">1. Prewriting</h3>
                        <p class="text-gray-700 mb-2">
                            Before you start writing, take time to brainstorm ideas, research your topic, and organize your thoughts.
                        </p>
                        <ul class="list-disc pl-6 text-gray-700">
                            <li>Brainstorm using mind maps or free writing</li>
                            <li>Research thoroughly from credible sources</li>
                            <li>Create an outline with main points and supporting details</li>
                        </ul>
                    </li>

                    <li class="bg-Bloghub-50 p-4 rounded-md">
                        <h3 class="font-semibold text-lg mb-2">2. Drafting</h3>
                        <p class="text-gray-700 mb-2">
                            Write your first draft focusing on getting your ideas down without worrying too much about perfect language or structure.
                        </p>
                        <ul class="list-disc pl-6 text-gray-700">
                            <li>Follow your outline but allow flexibility</li>
                            <li>Write without censoring yourself</li>
                            <li>Don't get stuck on finding the perfect word</li>
                        </ul>
                    </li>

                    <li class="bg-Bloghub-50 p-4 rounded-md">
                        <h3 class="font-semibold text-lg mb-2">3. Revising</h3>
                        <p class="text-gray-700 mb-2">
                            Review your draft for content and organization. This is where you refine your ideas, improve the flow, and strengthen your arguments.
                        </p>
                        <ul class="list-disc pl-6 text-gray-700">
                            <li>Evaluate if your writing achieves its purpose</li>
                            <li>Ensure logical organization and smooth transitions</li>
                            <li>Add, remove, or rearrange content as needed</li>
                        </ul>
                    </li>

                    <li class="bg-Bloghub-50 p-4 rounded-md">
                        <h3 class="font-semibold text-lg mb-2">4. Editing & Proofreading</h3>
                        <p class="text-gray-700 mb-2">
                            Polish your writing by checking for grammar, punctuation, spelling errors, and clarity issues.
                        </p>
                        <ul class="list-disc pl-6 text-gray-700">
                            <li>Check for grammatical errors and typos</li>
                            <li>Ensure consistent tone and style</li>
                            <li>Read aloud to catch awkward phrasing</li>
                            <li>Consider having someone else review your work</li>
                        </ul>
                    </li>
                </ol>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">Recommended Resources</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white border border-gray-200 p-4 rounded-md">
                        <h3 class="font-semibold text-lg mb-3 pb-2 border-b border-gray-100">Books</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <span class="inline-block w-5 h-5 bg-Bloghub-100 rounded-full text-Bloghub-700 text-xs flex items-center justify-center mr-2 mt-1">1</span>
                                <span>On Writing Well by William Zinsser</span>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-5 h-5 bg-Bloghub-100 rounded-full text-Bloghub-700 text-xs flex items-center justify-center mr-2 mt-1">2</span>
                                <span>The Elements of Style by Strunk and White</span>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-5 h-5 bg-Bloghub-100 rounded-full text-Bloghub-700 text-xs flex items-center justify-center mr-2 mt-1">3</span>
                                <span>Bird by Bird by Anne Lamott</span>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-5 h-5 bg-Bloghub-100 rounded-full text-Bloghub-700 text-xs flex items-center justify-center mr-2 mt-1">4</span>
                                <span>On Writing by Stephen King</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white border border-gray-200 p-4 rounded-md">
                        <h3 class="font-semibold text-lg mb-3 pb-2 border-b border-gray-100">Online Resources</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <span class="inline-block w-5 h-5 bg-Bloghub-100 rounded-full text-Bloghub-700 text-xs flex items-center justify-center mr-2 mt-1">1</span>
                                <span>Grammarly - For grammar and spelling checks</span>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-5 h-5 bg-Bloghub-100 rounded-full text-Bloghub-700 text-xs flex items-center justify-center mr-2 mt-1">2</span>
                                <span>Hemingway Editor - For readability analysis</span>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-5 h-5 bg-Bloghub-100 rounded-full text-Bloghub-700 text-xs flex items-center justify-center mr-2 mt-1">3</span>
                                <span>The Purdue Online Writing Lab (OWL)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-5 h-5 bg-Bloghub-100 rounded-full text-Bloghub-700 text-xs flex items-center justify-center mr-2 mt-1">4</span>
                                <span>MasterClass Writing Courses</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('home') }}" class="btn-primary inline-block">Return to Home</a>
            </div>
        </div>
    </div>
@endsection
