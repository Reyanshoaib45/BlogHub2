<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'BlogHub - Modern Blogging Platform')</title>
    @if (isset($seo))
        @include('partials.seo-meta', $seo)
    @else
        <title>{{ config('seo.default_title') }}</title>
        <meta name="description" content="{{ config('seo.default_description') }}">
    @endif
    <meta name="description" content="A modern blogging platform for creative minds" />
    <meta name="Reyan Shoaib" content="BlogHub" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <script src="//go.ezoic.net/ezoic.js?bloghub.live" type="text/javascript"></script>


    <meta property="og:image" content="/og-image.png" />
    <meta name="ezoic-site-verification" content="1oDCsF0qjWx9Tun4eeQaTJgMQAVSBX" />
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom Styles -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- Load Tailwind Configuration -->
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <!-- Load adsfile Configuration -->
    {{-- <script src="{{ asset('js/sw.js') }}"></script> --}}
</head>

<body class="bg-gray-50 font-sans text-gray-800">
    @unless (Route::is('login') || Route::is('register'))
        @include('partials.navbar') <!-- Include Navbar -->
    @endunless
    <div class="container mt-16">
        @yield('content') <!-- Dynamic Content -->

    </div>

    @unless (Route::is('login') || Route::is('register'))
        @include('partials.footer') <!-- Include Footer -->
    @endunless
    <script>
        < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" >
    </script>
    <script src="{{ asset('js/custom.js') }}"></script>
    // <!-- Page-Specific Scripts -->
    @stack('scripts')
    // <!-- Section for Blade Script -->
    @yield('scripts')
</body>

</html>
