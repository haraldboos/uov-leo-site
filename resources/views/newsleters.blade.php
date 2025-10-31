@extends('layouts.app')

@section('title', 'All Newsletters')

@section('content')
<section class="px-4 py-12 min-h-screen">
    <h1 class="text-4xl font-bold text-center mb-12 text-[#fbbf24]">
        All Newsletters
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
        @foreach($newsletters as $newsletter)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-2xl transition">
                @if($newsletter->banner)
                    <img src="{{ asset('storage/' . $newsletter->banner) }}" 
                         alt="Banner" class="w-full h-48 object-cover">
                @endif

                <div class="p-4">
                    <h2 class="text-lg font-bold text-gray-800 mb-2">
                        {{ $newsletter->title }}
                    </h2>
                    <p class="text-gray-500 text-sm mb-4">
                        {{ $newsletter->created_at->format('F Y') }}
                    </p>

                    <a href="{{ url('/news-letters/' . $newsletter->slug) }}"
                       class="inline-block px-4 py-2 bg-[#fbbf24] text-black rounded-lg hover:bg-[#e6aa18] transition">
                        View Newsletter
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
