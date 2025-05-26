@extends('layouts.app')

@section('content')
    <div class="bg-streamline-50 py-12">
        <div class="container mx-auto px-4 md:px-6 max-w-4xl">
            <!-- Back Button -->
            <div class="mb-8">
                <a href="{{ route('blog.index') }}"
                    class="text-streamline-600 hover:text-streamline-700 inline-flex items-center transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to blog
                </a>
            </div>

            <!-- Form Header -->
            <div class="mb-8 animate-fade-in">
                <h1 class="text-3xl md:text-4xl font-display font-bold text-gray-900 mb-4">
                    Create New Blog Post
                </h1>
                <p class="text-lg text-gray-600">
                    Share your knowledge and insights with the community.
                </p>
            </div>

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-8" role="alert">
                    <p class="font-bold">Validation Error</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Blog Post Form -->
            <div class="bg-white rounded-xl shadow-subtle p-6 md:p-8 animate-fade-in">
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Title -->
                    <div class="mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                        <input type="text" id="title" name="title"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                            placeholder="Enter post title" value="{{ old('title') }}" required>
                    </div>

                    <!-- Category -->
                    <div class="mb-6">
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                        <select id="category" name="category"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                            required>
                            <option value="">Select a category</option>
                            <option value="Technology" {{ old('category') == 'Technology' ? 'selected' : '' }}>Technology
                            </option>
                            <option value="Insurance" {{ old('category') == 'Insurance' ? 'selected' : '' }}>Insurance
                            </option>
                            <option value="Lifestyle" {{ old('category') == 'Lifestyle' ? 'selected' : '' }}>Life style
                            </option>
                            <option value="health" {{ old('category') == 'health' ? 'selected' : '' }}>Health
                            </option>
                            <option value="Productivity" {{ old('category') == 'Productivity' ? 'selected' : '' }}>
                                Productivity</option>
                            <option value="Design" {{ old('category') == 'Design' ? 'selected' : '' }}>Design</option>
                            <option value="Business" {{ old('category') == 'Business' ? 'selected' : '' }}>Business
                            </option>
                            <option value="Marketing" {{ old('category') == 'Marketing' ? 'selected' : '' }}>Marketing
                            </option>
                            <option value="Remote Work" {{ old('category') == 'Remote Work' ? 'selected' : '' }}>Remote
                                Work
                            </option>
                        </select>
                    </div>

                    <!-- Featured Image -->
                    <div class="mb-6">
                        <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-2">Featured
                            Image</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-md px-6 py-10 text-center">
                            <div class="space-y-1 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <div class="flex text-sm text-gray-600 justify-center">
                                    <label for="featured_image"
                                        class="relative cursor-pointer bg-white rounded-md font-medium text-streamline-600 hover:text-streamline-700 focus-within:outline-none">
                                        <span class="text-blue-600">Upload an image</span>
                                        <input id="featured_image" name="featured_image" type="file" class="sr-only"
                                            accept="image/*">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">
                                    PNG, JPG, GIF up to 2MB
                                </p>
                            </div>
                            <div id="image-preview" class="mt-4 hidden">
                                <div class="max-w-xs mx-auto">
                                    <img loading="lazy" id="preview-image" src="#" alt="Preview"
                                        class="max-h-48 rounded-md mx-auto">
                                    <button type="button" id="remove-image"
                                        class="mt-2 text-sm text-red-600 hover:text-red-800">
                                        Remove image
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image-2  -->
                    <div class="mb-6">
                        <label for="featured_image_md" class="block text-sm font-medium text-gray-700 mb-2">Middle
                            Image</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-md px-6 py-10 text-center">
                            <div class="space-y-1 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <div class="flex text-sm text-gray-600 justify-center">
                                    <label for="featured_image_md"
                                        class="relative cursor-pointer bg-white rounded-md font-medium text-streamline-600 hover:text-streamline-700 focus-within:outline-none">
                                        <span class="text-blue-600">Upload an image</span>
                                        <input id="featured_image_md" name="featured_image_md" type="file"
                                            class="sr-only" accept="image/*">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">
                                    PNG, JPG, GIF up to 2MB
                                </p>
                            </div>
                            <div id="image-preview_md" class="mt-4 hidden">
                                <div class="max-w-xs mx-auto">
                                    <img loading="lazy" id="preview-image_md" src="#" alt="Preview"
                                        class="max-h-48 rounded-md mx-auto">
                                    <button type="button" id="remove-image_md"
                                        class="mt-2 text-sm text-red-600 hover:text-red-800">
                                        Remove image
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Heading and Content -->
                    <div class="mb-6">
                        <label for="main_heading" class="block text-sm font-medium text-gray-700 mb-2">Main
                            Heading</label>
                        <input type="text" id="main_heading" name="main_heading"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                            placeholder="Enter main heading" value="{{ old('main_heading') }}">
                    </div>

                    <div class="mb-6">
                        <label for="main_content" class="block text-sm font-medium text-gray-700 mb-2">Main
                            Content</label>
                        <textarea id="main_content" name="main_content" rows="5"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                            placeholder="Write your main content here...">{{ old('main_content') }}</textarea>
                    </div>

                    <!-- First Set of Subheadings (3) -->
                    <div class="mb-8 border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">First Set of Subheadings</h3>

                        <div class="mb-6">
                            <label for="subheading_1" class="block text-sm font-medium text-gray-700 mb-2">Subheading
                                1</label>
                            <input type="text" id="subheading_1" name="subheading_1"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Enter subheading 1" value="{{ old('subheading_1') }}">
                        </div>

                        <div class="mb-6">
                            <label for="subcontent_1" class="block text-sm font-medium text-gray-700 mb-2">Content for
                                Subheading 1</label>
                            <textarea id="subcontent_1" name="subcontent_1" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Write content for subheading 1...">{{ old('subcontent_1') }}</textarea>
                        </div>

                        <div class="mb-6">
                            <label for="subheading_2" class="block text-sm font-medium text-gray-700 mb-2">Subheading
                                2</label>
                            <input type="text" id="subheading_2" name="subheading_2"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Enter subheading 2" value="{{ old('subheading_2') }}">
                        </div>

                        <div class="mb-6">
                            <label for="subcontent_2" class="block text-sm font-medium text-gray-700 mb-2">Content for
                                Subheading 2</label>
                            <textarea id="subcontent_2" name="subcontent_2" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Write content for subheading 2...">{{ old('subcontent_2') }}</textarea>
                        </div>

                        <div class="mb-6">
                            <label for="subheading_3" class="block text-sm font-medium text-gray-700 mb-2">Subheading
                                3</label>
                            <input type="text" id="subheading_3" name="subheading_3"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Enter subheading 3" value="{{ old('subheading_3') }}">
                        </div>

                        <div class="mb-6">
                            <label for="subcontent_3" class="block text-sm font-medium text-gray-700 mb-2">Content for
                                Subheading 3</label>
                            <textarea id="subcontent_3" name="subcontent_3" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Write content for subheading 3...">{{ old('subcontent_3') }}</textarea>
                        </div>
                    </div>

                    <!-- Second Set of Subheadings (4) -->
                    <div class="mb-8 border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Second Set of Subheadings</h3>

                        <div class="mb-6">
                            <label for="subheading_4" class="block text-sm font-medium text-gray-700 mb-2">Subheading
                                4</label>
                            <input type="text" id="subheading_4" name="subheading_4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Enter subheading 4" value="{{ old('subheading_4') }}">
                        </div>

                        <div class="mb-6">
                            <label for="subcontent_4" class="block text-sm font-medium text-gray-700 mb-2">Content for
                                Subheading 4</label>
                            <textarea id="subcontent_4" name="subcontent_4" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Write content for subheading 4...">{{ old('subcontent_4') }}</textarea>
                        </div>

                        <div class="mb-6">
                            <label for="subheading_5" class="block text-sm font-medium text-gray-700 mb-2">Subheading
                                5</label>
                            <input type="text" id="subheading_5" name="subheading_5"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Enter subheading 5" value="{{ old('subheading_5') }}">
                        </div>

                        <div class="mb-6">
                            <label for="subcontent_5" class="block text-sm font-medium text-gray-700 mb-2">Content for
                                Subheading 5</label>
                            <textarea id="subcontent_5" name="subcontent_5" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Write content for subheading 5...">{{ old('subcontent_5') }}</textarea>
                        </div>

                        <div class="mb-6">
                            <label for="subheading_6" class="block text-sm font-medium text-gray-700 mb-2">Subheading
                                6</label>
                            <input type="text" id="subheading_6" name="subheading_6"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Enter subheading 6" value="{{ old('subheading_6') }}">
                        </div>

                        <div class="mb-6">
                            <label for="subcontent_6" class="block text-sm font-medium text-gray-700 mb-2">Content for
                                Subheading 6</label>
                            <textarea id="subcontent_6" name="subcontent_6" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Write content for subheading 6...">{{ old('subcontent_6') }}</textarea>
                        </div>

                        <div class="mb-6">
                            <label for="subheading_7" class="block text-sm font-medium text-gray-700 mb-2">Subheading
                                7</label>
                            <input type="text" id="subheading_7" name="subheading_7"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Enter subheading 7" value="{{ old('subheading_7') }}">
                        </div>

                        <div class="mb-6">
                            <label for="subcontent_7" class="block text-sm font-medium text-gray-700 mb-2">Content for
                                Subheading 7</label>
                            <textarea id="subcontent_7" name="subcontent_7" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                                placeholder="Write content for subheading 7...">{{ old('subcontent_7') }}</textarea>
                        </div>
                    </div>

                    <!-- Final Content -->
                    <div class="mb-6">
                        <label for="final_content" class="block text-sm font-medium text-gray-700 mb-2">Final
                            Content</label>
                        <textarea id="final_content" name="final_content" rows="5"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                            placeholder="Write your final content here...">{{ old('final_content') }}</textarea>
                    </div>

                    <!-- Tags -->
                    <div class="mb-6">
                        <label for="tags" class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                        <input type="text" id="tags" name="tags"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-streamline-500 focus:border-transparent"
                            placeholder="Enter tags separated by commas (e.g. productivity, tools, automation)"
                            value="{{ old('tags') }}">
                        <p class="text-sm text-gray-500 mt-1">Separate tags with commas</p>
                    </div>

                    <!-- Publish Status -->
                    <div class="mb-8">
                        <div class="flex items-center">
                            <input type="hidden" name="is_published" value="0">
                            <input type="checkbox" id="is_published" name="is_published" value="1"
                                class="h-4 w-4 text-streamline-600 focus:ring-streamline-500 border-gray-300 rounded"
                                {{ old('is_published') ? 'checked' : '' }}>
                            <label for="is_published" class="ml-2 block text-sm text-gray-700">
                                Publish immediately
                            </label>
                        </div>
                        <p class="text-sm text-gray-500 mt-1 ml-6">Uncheck to save as draft</p>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('blog.index') }}"
                            class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-streamline-500 transition-colors">
                            Cancel
                        </a>
                        <button type="submit"
                            class="px-6 py-2 bg-streamline-600 hover:bg-streamline-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-streamline-500 transition-colors">
                            Create Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const featuredImageInput = document.getElementById('featured_image');
            const imagePreview = document.getElementById('image-preview');
            const previewImage = document.getElementById('preview-image');
            const removeImageButton = document.getElementById('remove-image');

            featuredImageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        previewImage.src = event.target.result;
                        imagePreview.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                }
            });

            removeImageButton.addEventListener('click', function() {
                featuredImageInput.value = '';
                imagePreview.classList.add('hidden');
                previewImage.src = '#';
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const featuredImageInput = document.getElementById('featured_image_md');
            const imagePreview = document.getElementById('image-preview_md');
            const previewImage = document.getElementById('preview-image_md');
            const removeImageButton = document.getElementById('remove-image_md');

            featuredImageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        previewImage.src = event.target.result;
                        imagePreview.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                }
            });

            removeImageButton.addEventListener('click', function() {
                featuredImageInput.value = '';
                imagePreview.classList.add('hidden');
                previewImage.src = '#';
            });
        });
    </script>
@endsection

@endsection
