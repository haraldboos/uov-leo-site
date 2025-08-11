@extends('layouts.app')

@section('title', 'Event Page')

@section('content')
<section class="py-16 px-4 sm:px-6 lg:px-24 bg-yellow-50 text-gray-900">
    <div class="max-w-7xl mx-auto">

        <!-- Title & Date -->
        <header class="mb-6">
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-yellow-600 leading-tight break-words">
                {{ $event->title }}
            </h1>
     <p class="text-xs sm:text-sm text-gray-500 mt-2">
    {{ optional($event->event_date)->format('F d, Y') }}
</p>
        </header>

        <!-- Main Photo -->
        @if($event->main_photo)
            <div class="mb-8">
                <img src="{{ asset('storage/' . $event->main_photo) }}"
                     alt="{{ $event->title }}"
                     class="w-full max-h-[70vh] object-cover rounded-xl shadow-lg">
            </div>
        @endif

        <!-- Description -->
        <article class="mb-10">
            <p class="text-sm sm:text-base md:text-lg leading-relaxed text-gray-800 whitespace-pre-line">
                {{ $event->description }}
            </p>
        </article>

        <!-- Gallery -->
        @if($event->photos && is_array($event->photos))
            <div x-data="{ selected: null }" @keydown.escape.window="selected = null">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    @foreach($event->photos as $photo)
                        <button @click="selected = '{{ asset('storage/' . $photo) }}'"
                                class="group overflow-hidden rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-yellow-400 transition">
                            <img src="{{ asset('storage/' . $photo) }}"
                                 alt="Event Image"
                                 class="w-full h-44 sm:h-48 object-cover transform group-hover:scale-105 transition duration-300 ease-in-out">
                        </button>
                    @endforeach
                </div>

                <!-- Lightbox Modal -->
                <div x-show="selected"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="fixed inset-0 bg-black bg-opacity-80 backdrop-blur-sm flex items-center justify-center p-4 z-50"
                     @click.self="selected = null"
                     x-cloak>
                    <div class="relative w-full max-w-4xl">
                        <!-- Minimalist "×" Close Button -->
                        <button @click="selected = null"
                                class="absolute top-4 right-4 text-white text-3xl sm:text-4xl hover:text-yellow-300 transition focus:outline-none focus:ring-2 focus:ring-yellow-400"
                                aria-label="Close lightbox">
                            &times;
                        </button>
                        <img :src="selected"
                             alt="Full Image"
                             class="rounded-lg shadow-xl max-h-[75vh] w-full object-contain">
                    </div>
                </div>
            </div>
        @endif

    </div>
</section>
@endsection
