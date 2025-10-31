@extends('layouts.app')

@section('title', $newsletter->title ?? 'Official Newsletter')

@section('content')

<section class="bg-[#1f2937] text-white px-4 py-12 min-h-screen flex flex-col items-center">

    <!-- Title -->
<h1 data-aos="fade-down" data-aos-duration="800"
    class="text-3xl sm:text-4xl md:text-5xl font-bold mb-8 text-center text-[#fbbf24] drop-shadow-md leading-snug">
    
    <span class="block">IGNITE</span>

    <span class="block mt-2 uppercase">
        The Official Newsletter of Leo Club of University of Vavuniya
    </span>

    <span class="block mt-2 tracking-wide">
        {{ strtoupper($newsletter->title) }}
    </span>
</h1>

    <!-- Responsive PDF Viewer -->
    <div data-aos="fade-up" data-aos-duration="1000"
         class="w-full max-w-6xl bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-300">

        <div class="relative w-full" style="padding-top: 130%;">
            <iframe 
                src="{{ asset('storage/' . $newsletter->file) }}#toolbar=1&zoom=100" 
                class="absolute inset-0 w-full h-full border-none rounded-xl"
                title="{{ $newsletter->title }}">
            </iframe>
        </div>
    </div>

    <!-- Banner Image (optional) -->

    <!-- Download Button -->
    <div class="mt-8 text-center">
        <a href="{{ asset('storage/' . $newsletter->file) }}" download
           class="inline-block px-6 py-3 text-lg font-semibold text-[#3b131f] bg-[#fbbf24] rounded-full hover:bg-[#e6aa18] transition duration-300">
            Download PDF
        </a>
    </div>
</section>

@endsection
