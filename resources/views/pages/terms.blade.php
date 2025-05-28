@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-10 max-w-5xl">
        <div class="animate-fade-in">
            <h1 class="text-3xl md:text-4xl font-bold mb-8 text-Bloghub-800">Terms and Conditions</h1>

            <div class="bg-white shadow-sm rounded-lg p-6 mb-8">
                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">1. Introduction</h2>
                <p class="mb-4 text-gray-700">
                    Welcome to BlogHub. These Terms and Conditions govern your use of our website and services.
                    By accessing or using our platform, you agree to be bound by these Terms.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">2. Definitions</h2>
                <p class="mb-4 text-gray-700">
                    <strong>"User", "You", "Your"</strong>: refers to any individual accessing or using our platform.<br>
                    <strong>"Blog Hub", "We", "Our", "Us"</strong>: refers to the Blog Hub platform and its operators.<br>
                    <strong>"Service"</strong>: refers to the website, content, and features offered by Blog Hub.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">3. User Accounts</h2>
                <p class="mb-4 text-gray-700">
                    When you create an account with us, you must provide accurate and complete information.
                    You are responsible for maintaining the confidentiality of your account credentials
                    and for all activities that occur under your account.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">4. User Content</h2>
                <p class="mb-4 text-gray-700">
                    Users may post content on our platform. You retain ownership of your content, but grant
                    us a non-exclusive license to use, display, and distribute your content on our platform.
                    You are solely responsible for the content you post.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">5. Prohibited Conduct</h2>
                <p class="mb-4 text-gray-700">
                    You may not use our service for any illegal or unauthorized purpose. You agree not to:
                </p>
                <ul class="list-disc pl-6 mb-4 text-gray-700">
                    <li>Violate any laws or regulations</li>
                    <li>Infringe upon the rights of others</li>
                    <li>Post content that is harmful, offensive, or inappropriate</li>
                    <li>Attempt to gain unauthorized access to our systems</li>
                    <li>Interfere with or disrupt our services</li>
                </ul>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">6. Termination</h2>
                <p class="mb-4 text-gray-700">
                    We reserve the right to terminate or suspend your account at any time, for any reason,
                    without notice or liability.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">7. Disclaimers</h2>
                <p class="mb-4 text-gray-700">
                    Our service is provided "as is" without warranties of any kind, either express or implied.
                    We do not warrant that our service will be uninterrupted, secure, or error-free.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">8. Limitation of Liability</h2>
                <p class="mb-4 text-gray-700">
                    In no event shall Bloghub be liable for any indirect, incidental, special, or consequential
                    damages arising out of or in connection with your use of our service.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">9. Changes to Terms</h2>
                <p class="mb-4 text-gray-700">
                    We reserve the right to modify these Terms at any time. We will provide notice of significant
                    changes. Your continued use of the service after such modifications constitutes your acceptance
                    of the updated Terms.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">10. Contact Information</h2>
                <p class="mb-4 text-gray-700">
                    If you have any questions about these Terms, please contact us at support@BlogHub.com.
                </p>
            </div>

            <div class="text-center">
                <a href="{{ route('home') }}" class="btn-primary inline-block">Return to Home</a>
            </div>
        </div>
    </div>
@endsection
