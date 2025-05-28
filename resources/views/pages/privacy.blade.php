@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-10 max-w-5xl">
        <div class="animate-fade-in">
            <h1 class="text-3xl md:text-4xl font-bold mb-8 text-Bloghub-800">Privacy Policy</h1>

            <div class="bg-white shadow-sm rounded-lg p-6 mb-8">
                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">1. Introduction</h2>
                <p class="mb-4 text-gray-700">
                    BlogHub is committed to protecting your privacy. This Privacy Policy explains how we collect,
                    use, disclose, and safeguard your information when you visit our website or use our services.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">2. Information We Collect</h2>
                <p class="mb-4 text-gray-700">
                    <strong>Personal Information</strong>: We may collect personal information that you voluntarily
                    provide to us when you register on our platform, including your name, email address, and profile picture.
                </p>
                <p class="mb-4 text-gray-700">
                    <strong>Usage Data</strong>: We automatically collect certain information when you visit, use,
                    or navigate our platform. This may include IP address, browser type, device information,
                    and pages visited.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">3. How We Use Your Information</h2>
                <p class="mb-4 text-gray-700">
                    We use the information we collect for various purposes, including to:
                </p>
                <ul class="list-disc pl-6 mb-4 text-gray-700">
                    <li>Provide, operate, and maintain our platform</li>
                    <li>Improve, personalize, and expand our platform</li>
                    <li>Understand and analyze how you use our platform</li>
                    <li>Develop new products, services, features, and functionality</li>
                    <li>Communicate with you about updates, security alerts, and support</li>
                    <li>Find and prevent fraud</li>
                </ul>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">4. Disclosure of Your Information</h2>
                <p class="mb-4 text-gray-700">
                    We may share your information in the following situations:
                </p>
                <ul class="list-disc pl-6 mb-4 text-gray-700">
                    <li><strong>With Service Providers</strong>: We may share your information with service providers to
                        perform services on our behalf.</li>
                    <li><strong>For Business Transfers</strong>: We may share your information in connection with a
                        merger, sale, or acquisition.</li>
                    <li><strong>With Your Consent</strong>: We may disclose your information for any other purpose
                        with your consent.</li>
                    <li><strong>For Legal Purposes</strong>: We may disclose your information where required by law
                        or to protect our rights.</li>
                </ul>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">5. Security of Your Information</h2>
                <p class="mb-4 text-gray-700">
                    We use administrative, technical, and physical security measures to protect your personal information.
                    However, no data transmission over the Internet or storage system can be guaranteed to be 100% secure.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">6. Cookies and Web Beacons</h2>
                <p class="mb-4 text-gray-700">
                    We use cookies and similar tracking technologies to track activity on our platform and store certain
                    information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">7. Your Rights</h2>
                <p class="mb-4 text-gray-700">
                    Depending on your location, you may have certain rights regarding your personal information, such as:
                </p>
                <ul class="list-disc pl-6 mb-4 text-gray-700">
                    <li>The right to access the personal information we have about you</li>
                    <li>The right to request correction of inaccurate personal information</li>
                    <li>The right to request deletion of your personal information</li>
                    <li>The right to object to processing of your personal information</li>
                    <li>The right to data portability</li>
                </ul>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">8. Changes to This Privacy Policy</h2>
                <p class="mb-4 text-gray-700">
                    We may update our Privacy Policy from time to time. We will notify you of any changes by posting
                    the new Privacy Policy on this page and updating the "Last Updated" date.
                </p>

                <h2 class="text-xl font-semibold mb-4 text-Bloghub-700">9. Contact Us</h2>
                <p class="mb-4 text-gray-700">
                    If you have any questions about this Privacy Policy, please contact us at privacy@BlogHub.com.
                </p>

                <p class="mt-8 text-gray-500 text-sm">Last Updated: July 1, 2024</p>
            </div>

            <div class="text-center">
                <a href="{{ route('home') }}" class="btn-primary inline-block">Return to Home</a>
            </div>
        </div>
    </div>
@endsection
