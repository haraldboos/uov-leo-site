<nav x-data="{ open: false }" class="bg-white border-b border-gray-200 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-auto">

            <!-- Logo -->
 <a href="{{ url('/') }}" class="flex items-center">
    <img src="{{ asset('storage/leo-logo-bg-none.png') }}" alt="Leo Club Logo"
         class="h-20 w-20 sm:h-28 sm:w-28 md:h-32 md:w-32 lg:h-40 lg:w-40 object-contain" />
</a>


            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ url('/') }}" class="text-gray-700 font-semibold hover:text-yellow-500 transition">Home</a>
                <a href="{{ url('/#about') }}" class="text-gray-700 font-semibold hover:text-yellow-500 transition">About</a>
                <a href="{{ url('/projects') }}" class="text-gray-700 font-semibold hover:text-yellow-500 transition">Projects</a>
                <a href="{{ url('/events') }}" class="text-gray-700 font-semibold hover:text-yellow-500 transition">Events</a>
                <a href="{{ url('/members/25-26') }}" class="text-gray-700 font-semibold hover:text-yellow-500 transition">Members</a>
                <a href="{{ url('/news-letters') }}" class="text-gray-700 font-semibold hover:text-yellow-500 transition">News letters</a>

                <a href="https://drive.google.com/file/d/1zklRzCLY_Tu5p-zK3T1ygKFScaE3bPQO/view" class="text-gray-700 font-semibold hover:text-yellow-500 transition">E-Directory</a>

                <a href="{{ url('/contact') }}" class="text-sm bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">Contact Us</a>
                <!--<a href="#" class="text-sm bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">Join Us</a>-->
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-gray-700 focus:outline-none" aria-label="Toggle menu">
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition class="md:hidden px-4 pb-4 space-y-2">
        <a href="{{ url('/') }}" class="block text-gray-700 hover:text-yellow-500 font-semibold">Home</a>
        <a href="{{ url('/#about') }}" class="block text-gray-700 hover:text-yellow-500 font-semibold">About</a>
        <a href="{{ url('/projects') }}" class="block text-gray-700 hover:text-yellow-500 font-semibold">Projects</a>
        <a href="{{ url('/events') }}" class="block text-gray-700 hover:text-yellow-500 font-semibold">Events</a>
        <a href="{{ url('/members/25-26') }}" class="block text-gray-700 hover:text-yellow-500 font-semibold">Members</a>
                        <a href="https://drive.google.com/file/d/1zklRzCLY_Tu5p-zK3T1ygKFScaE3bPQO/view" class="block text-gray-700 hover:text-yellow-500 font-semibold">E-Directory</a>
        <a href="{{ url('/news-letters') }}" class="block mt-2 text-sm bg-yellow-500 text-white px-4 py-2 rounded text-center hover:bg-yellow-600">Contact</a>

        <!--<a href="#" class="block mt-2 text-sm bg-yellow-500 text-white px-4 py-2 rounded text-center hover:bg-yellow-600">Join Us</a>-->
    </div>
</nav>
