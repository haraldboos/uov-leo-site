<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8" />    <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> 
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script> 

    <!-- Favicon & Manifest -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <script src="//unpkg.com/alpinejs" defer></script>
        
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

    @vite('resources/css/app.css')

    <title>@yield('title', 'Leo Club | University of Vavuniya')</title>    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
</head>
<body class="flex flex-col min-h-screen bg-yellow-50">
    <div id="loader"
         class="fixed inset-0 z-[9999] flex items-center justify-center bg-yellow-50 transition-opacity duration-500">
        <div class="animate-spin rounded-full h-12 w-12 border-t-4 border-yellow-600 border-opacity-50"></div>
    </div>

    <x-navbar />
    

    <main class="flex-grow  ">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center ">
        <div class="container mx-auto space-y-2">
            <h2 class="text-lg font-semibold">Leo Club of University of Vavuniya</h2>
            <div class="flex justify-center space-x-6 text-sm">
                <a href="https://facebook.com" target="_blank" class="hover:text-blue-400">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
                <a href="https://instagram.com" target="_blank" class="hover:text-pink-400">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="mailto:leoclub@vau.ac.lk" class="hover:text-yellow-300">
                    <i class="fas fa-envelope"></i> Email Us
                </a>
            </div>
            <p class="text-xs">University of Vavuniya, Sri Lanka</p>
            <p class="text-xs">&copy; {{ date('Y') }} Leo Club | All rights reserved.</p>
        </div>
    </footer>

    <script>
        window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            if (loader) {
                loader.classList.add('opacity-0');
                setTimeout(() => loader.remove(), 500);
            }
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        AOS.init({
            // once: true, // Optional: animations happen only once
            duration: 800, // Optional: default animation duration
        });
    });
</script>

        @stack('scripts')
</body>
</html>
