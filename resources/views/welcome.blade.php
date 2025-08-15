@extends('layouts.app')
    <!--<x-home_slider :slides="$slides" data-aos="fade" data-aos-duration="1000"/>-->

@section('title', 'Home Page')

@section('content')
    
{{-- Hero Banner Section --}}
<section class="relative min-h-screen overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat shadow-lg md:bg-fixed"
         style="background-image: url('{{ asset('storage/banner.png') }}');">
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 z-10 bg-black/60"></div>

    <!-- Foreground Content -->
    <div class="absolute inset-0 z-20 flex items-center justify-center text-center text-white px-6 md:px-12">
        <div data-aos="zoom-in" data-aos-delay="200"
             class="max-w-6xl mx-auto flex flex-col items-center gap-8">

<!--<h2 data-aos="fade-up" data-aos-delay="300"-->
<!--    class="text-5xl sm:text-7xl lg:text-8xl font-extrabold tracking-wide leading-tight drop-shadow-lg">-->
<!--    Welcome to Leo Page-->
<!--</h2>-->

            <!-- Main Heading -->
<!-- Main Heading -->
<h2 data-aos="fade-up" data-aos-delay="300"
    class="text-3xl sm:text-5xl md:text-7xl lg:text-8xl font-extrabold tracking-wide leading-tight drop-shadow-lg">
    Welcome to Leo Page — Serving the Story of 2025–26
</h2>

            <!-- Logo (unchanged) -->
            <div data-aos="fade-up" data-aos-delay="400" class="flex justify-center">
                <img src="{{ asset('storage/leo-logo-bg-none.png') }}" alt="Leo Logo"
                     class="w-44 h-44 sm:w-56 sm:h-56 md:w-64 md:h-64 rounded-full object-cover border-4 border-white shadow-xl">
            </div>

            <!-- Subheading -->
            <h3 data-aos="fade-up" data-aos-delay="500"
                class="text-3xl sm:text-4xl md:text-5xl font-semibold text-white/90">
                Leo Club of University of Vavuniya
            </h3>

            <!-- Motto -->
            <p data-aos="fade-up" data-aos-delay="600"
               class="text-2xl sm:text-3xl md:text-4xl text-yellow-400 font-bold italic">
                "Leadership. Experience. Opportunity."
            </p>
        </div>
    </div>
</section>





    {{-- Projects Section --}}

<div class="py-12" data-aos="zoom-in" data-aos-delay="200">        <x-count_show />
    </div>




<div class="py-12 px-4 sm:px-6 lg:px-20" data-aos="fade-up" data-aos-duration="800">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-center mb-6 tracking-tight text-[#fbbf24] drop-shadow-md">
            See Our Projects
        </h1>
        <x-projectscrousole :projects="$projects" data-aos="zoom-in-up" data-aos-delay="200" />
    </div>

    {{-- About Us --}}
    <x-about_us  data-aos="fade-right" data-aos-duration="700" />

    {{-- Vision & Mission --}}
    <x-vision_mission  data-aos="fade-left" data-aos-duration="700" />



    <div class="py-12 px-4 sm:px-6 lg:px-20  text-[#1f2937]" data-aos="fade-up" data-aos-duration="800">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-center mb-6 "  data-aos="fade-down" data-aos-delay="100">
            Announcements
        </h1>
        <x-announsment :announcements="$announcements" data-aos="zoom-in" data-aos-delay="200" />
</div>
        <div class="mt-6 text-center">
            <a href="{{ route('all.anon.show') }}"
               class="inline-block px-5 py-2 text-sm font-semibold text-[#3b131f] bg-[#fbbf24] rounded-full hover:bg-[#e6aa18] transition duration-300">
                See All Announcements
            </a>
        </div>
    </div>

    {{-- Events Section --}}
    <div class="py-12 px-4 sm:px-6 lg:px-20   " data-aos="fade-up" data-aos-duration="800">
<h1 class="text-4xl sm:text-5xl font-extrabold text-center mb-6 tracking-tight text-[#fbbf24] drop-shadow-md" data-aos="fade-down" data-aos-delay="100">
                See Our Events
        </h1>
        <div class=" mx-auto"data-aos="zoom-in-up" data-aos-delay="200">
            <x-eventcrousole :events="$events" />
        </div>
    </div>
@endsection
