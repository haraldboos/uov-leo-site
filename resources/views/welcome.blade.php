@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
   <x-home_slider :slides="['home.jpg', 'home.jpg', 'home.jpg']" />

<div class="    ">
    <h1 class="text-5xl font-extrabold text-center py-10">See Our Projects</h1>
    <x-projectscrousole :projects='$projects'/>

   </div>

   <x-about_us />

   <x-vision_mission />
   <x-count_show />

   <div >
      <x-announsment :announcements='$announcements'/>
   </div>
   
   
<div class="my-6  ">
    <h1 class="text-5xl bg-[#36151e] font-extrabold text-center mb-4">See Our events</h1>
      {{-- <h1>see our projects</h1> --}}
<x-eventcrousole :events='$events'/>

</div>
   @endsection
