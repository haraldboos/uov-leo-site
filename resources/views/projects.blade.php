@extends('layouts.app')

@section('title', 'projects Page')

@section('content')
   <x-home_slider :slides="['project_banner.jpg', 'home.jpg', 'home.jpg']" />

   <x-about_us />


@endsection
