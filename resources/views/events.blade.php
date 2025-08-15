@extends('layouts.app')

@section('title', 'projects Page')

@section('content')

<section class="relative py-16 px-6 sm:px-10 lg:px-20 text-white bg-cover bg-center bg-no-repeat"
         style="background-image: url('{{ asset('storage/event.jpg') }}'); background-attachment: fixed;">
    
    <!-- Black Overlay -->
    <div class="absolute inset-0 bg-black opacity-60"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-5xl mx-auto text-center">
        <h2 class="text-4xl font-bold text-white mb-6">Who We Are</h2>

        <div class="flex flex-col md:flex-row items-center gap-8 md:text-left">
            <div>
<p class="text-lg leading-relaxed">
    Our <span class="font-semibold text-yellow-600">Leo Club projects</span> are more than events—they're expressions of purpose, creativity, and community. 
    Each initiative is crafted by passionate students who believe in making a difference, whether through education, sustainability, or social outreach. 
    From coding workshops to campus cleanups, we turn ideas into action and challenges into opportunities.
</p>

<p class="text-lg leading-relaxed mt-6">
    These projects are the heartbeat of our club—where leadership is learned, friendships are forged, and impact is felt. 💛 
    Whether you're contributing your skills, sharing your story, or simply showing up, you're part of a movement that builds, uplifts, and inspires.
</p>

            </div>
        </div>
    </div>
</section>


<section class="bg-yellow-50 py-16 px-6 sm:px-10 lg:px-20 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-12">Our Events</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($events as $project)
            <a href="{{ route('insevent.show', $project->id) }}">
                <div class="w-80 mx-auto transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    <div class="rounded-xl shadow hover:shadow-2xl overflow-hidden bg-white">
                        <img src="{{ asset('storage/' . $project->main_photo) }}"
                             alt="{{ $project->title }}"
                             class="w-full h-48 object-cover transition-opacity duration-300 hover:opacity-90">
                        <div class="p-4 space-y-1">
                            <h3 class="text-lg font-bold text-gray-800">{{ $project->title }}</h3>
                            <p class="text-sm text-gray-600">{{ $project->location }}</p>
                            <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($project->project_date)->format('M d, Y') }}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
{{ $events->links() }}
        </div>
    </div>
</section>



@endsection
