@extends('layouts.app')

@section('title', $announsment->title)

@section('content')
<section class="py-12 px-4 sm:px-6 lg:px-20 bg-gray-50 text-gray-900">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        @if($announsment->image)
            <img src="{{ asset('storage/' . $announsment->image) }}"
                 class="w-full h-48 sm:h-56 md:h-64 object-cover"
                 alt="{{ $announsment->title }}">
        @endif

        <div class="p-6 space-y-6">
            <h1 class="text-2xl sm:text-3xl font-bold text-yellow-600">{{ $announsment->title }}</h1>

            <p class="text-base text-gray-700 leading-relaxed">
                {{ $announsment->description }}
            </p>

            <div class="text-sm text-gray-500 space-y-1">
                @if($announsment->date_created)
                    <p>📅 Posted: {{ \Carbon\Carbon::parse($announsment->date_created)->format('F j, Y') }}</p>
                @endif
                @if($announsment->deadline)
                    <p>⏰ Deadline: {{ \Carbon\Carbon::parse($announsment->deadline)->format('F j, Y') }}</p>
                @endif
            </div>

            <div class="flex flex-wrap gap-3 pt-2">
                @if($announsment->google_form_link)
                    <a href="{{ $announsment->google_form_link }}" target="_blank"
                       class="px-4 py-2 bg-yellow-500 text-white rounded-full text-sm hover:bg-yellow-600 transition">
                        Google Form
                    </a>
                @endif
                @if($announsment->facebook_link)
                    <a href="{{ $announsment->facebook_link }}" target="_blank"
                       class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm hover:bg-blue-700 transition">
                        Facebook
                    </a>
                @endif
                @if($announsment->link)
                    <a href="{{ $announsment->link }}" target="_blank"
                       class="px-4 py-2 bg-gray-800 text-white rounded-full text-sm hover:bg-gray-900 transition">
                        More Info
                    </a>
                @endif
            </div>

            <a href="{{ route('home') }}"
               class="inline-block mt-6 text-sm text-blue-500 hover:underline">
               ← Back to Announcements
            </a>
        </div>
    </div>
</section>
@endsection
