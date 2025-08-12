@extends('layouts.app')

@section('title', 'Members Page')

@section('content')

<div class="max-w-6xl mx-auto py-12 px-6">
<h1 class="text-4xl font-bold bg-gradient-to-r from-orange-500 via-yellow-500 to-orange-400 text-transparent bg-clip-text text-center mb-10 uppercase tracking-wide">
    Journey Through Our Committee Legacy
</h1>


    {{-- year listing part --}}
@foreach ($years as $year)
    <a href="{{ route('members',['selectedYear' => $year]) }}">
        <button class="{{ $selectedYear == $year ? 'bg-yellow-500 text-white' : 'bg-white text-yellow-500 border border-yellow-500' }} px-4 py-2 rounded-lg shadow-sm hover:shadow-md transition">
            {{ $year }}
        </button>
    </a>
@endforeach
</div>
<div class="max-w-6xl mx-auto py-12 px-6">

    <h2 class="text-3xl font-bold text-yellow-600 mb-8 border-b-4 border-yellow-500 pb-2 uppercase tracking-wide">
        Executive Committee – {{ $selectedYear }}
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-16">
        @foreach ($executiveMembers as $member)
  <div class="relative group overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition duration-300">
    <!-- Image -->
    <div class="h-72 w-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
         style="background-image: url('{{ asset('storage/' . $member->image) }}');">
    </div>

    <!-- 📌 Always-visible position text -->
    <div class="absolute bottom-0 w-full text-center text-md  opacity-80 flex justify-center items-center  bg-black text-white  bg-opacity-80  font-bold">
        {{ $member->position }}
    </div>

    <!-- 🪄 Hover-only overlay with name -->
    <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-80 transition-opacity duration-300 flex justify-center items-center text-white text-center px-4">
        <h3 class="text-lg font-bold uppercase tracking-wide">{{ $member->name }}</h3>
    </div>
</div>
        @endforeach
    </div>

    <h2 class="text-3xl font-bold text-orange-600 mb-8 border-b-4 border-orange-500 pb-2 uppercase tracking-wide">
        Board of Directors – {{ $selectedYear }}
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($boardMembers as $member)
<div class="relative group overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition duration-300">
    <!-- Image -->
    <div class="h-72 w-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
         style="background-image: url('{{ asset('storage/' . $member->image) }}');">
    </div>

    <!-- 📌 Always-visible position text -->
    <div class="absolute bottom-0 w-full text-center text-md  opacity-80 flex justify-center items-center  bg-black text-white  bg-opacity-80  font-bold">
        {{ $member->position }}
    </div>

    <!-- 🪄 Hover-only overlay with name -->
   <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-80 transition-opacity duration-300 flex flex-col justify-center items-center text-white text-center px-4 space-y-2">
    <h3 class="text-lg font-bold uppercase tracking-wide">{{ $member->name }}</h3>
    @if($member->email)
        <p class="text-sm">{{ $member->email }}</p>
    @endif
    @if($member->phone)
        <p class="text-sm">{{ $member->phone }}</p>
    @endif
</div>
</div>

        @endforeach
    </div>

</div>
@endsection
