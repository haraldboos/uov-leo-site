<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8" />    <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> 
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script> 
    <script src="//unpkg.com/alpinejs" defer></script>
        

    @vite('resources/css/app.css')

    <title>@yield('title', 'Leo Club | University of Vavuniya')</title>    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
</head>
<body class="flex flex-col min-h-screen">

    <x-navbar />
    

    <main class="flex-grow  bg-yellow-50">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-6">
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



        @stack('scripts')
</body>
</html>
