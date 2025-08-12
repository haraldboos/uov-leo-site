@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    {{-- Slider Section --}}
    <x-home_slider :slides="$slides" data-aos="fade" data-aos-duration="1000"/>

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
    <x-about_us data-aos="fade-right" data-aos-duration="700" />

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
