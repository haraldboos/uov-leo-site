@extends('layouts.app')

@section('title', 'All Announcements')

@section('content')
{{-- Full card --}}

<div>
<x-announsment :announcements='$announcements' />


</div>

@endsection
