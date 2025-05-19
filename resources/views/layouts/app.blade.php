<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'BlogHub - Modern Blogging Platform')</title>
    @if(isset($seo))
        @include('partials.seo-meta', $seo)
    @else
        <title>{{ config('seo.default_title') }}</title>
        <meta name="description" content="{{ config('seo.default_description') }}">
    @endif

    <meta name="description" content="A modern blogging platform for creative minds" />
    <meta name="Reyan Shoaib" content="BlogHub" />
    <meta property="og:image" content="/og-image.png" />
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
    <!-- Custom Styles -->
    <link rel="stylesheet" href="/src/App.css">
    <script src="{{ asset('js/tailwind.js') }}"></script>

    <!-- Load Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#9b87f5',
                        secondary: '#7E69AB',
                        tertiary: '#6E59A5',
                        dark: '#1A1F2C',
                        light: '#F6F6F7',
                        accent: '#D6BCFA',
                        muted: '#8E9196',
                        streamline: {
                            50: "#f0f9ff",
                            100: "#e0f2fe",
                            200: "#bae6fd",
                            300: "#7dd3fc",
                            400: "#38bdf8",
                            500: "#0ea5e9",
                            600: "#0284c7",
                            700: "#0369a1",
                            800: "#075985",
                            900: "#0c4a6e"
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Inter', 'sans-serif']
                    },
                    boxShadow: {
                        'soft': '0 5px 15px rgba(0, 0, 0, 0.05)',
                        'hover': '0 10px 25px rgba(155, 135, 245, 0.2)'
                    },
                    animation: {
                        "fade-in": "fadeIn 0.5s ease-out",
                        "scale-in": "scaleIn 0.3s ease-out",
                        "slide-in": "slideInLeft 0.6s ease-out",
                        "float": "float 6s ease-in-out infinite",
                        "pulse-soft": "pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite"
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(10px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            }
                        },
                        scaleIn: {
                            '0%': {
                                transform: 'scale(0.95)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'scale(1)',
                                opacity: '1'
                            }
                        },
                        slideInLeft: {
                            '0%': {
                                transform: 'translateX(-20px)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'translateX(0)',
                                opacity: '1'
                            }
                        },
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-10px)'
                            }
                        },
                        pulse: {
                            '0%, 100%': {
                                opacity: '1'
                            },
                            '50%': {
                                opacity: '0.7'
                            }
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 font-sans text-gray-800">
@include('partials.navbar') <!-- Include Navbar -->

<div class="container mt-16">
    @yield('content') <!-- Dynamic Content -->
</div>

@include('partials.footer') <!-- Include Footer -->
<script>
    < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" >
</script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://cdn.gpteng.co/gptengineer.js" type="module"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</script>

<!-- Page-Specific Scripts -->
@stack('scripts')
<!-- Section for Blade Script -->
@yield('scripts')
</body>

</html>
