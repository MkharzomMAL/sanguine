@extends('layout.app')

@section('body')

    <div class="container flex-column h-50 justify-content-center d-flex align-items-center text-center">
        <h1 class="text-white">{{ $homepage->heading1 }}</h1>
        <h2 class="text-white">{{ $homepage->heading2 }}</h2>
        <p class="text-white p-4">{{ $homepage->brief }}</p>
    </div>

    @if($homepage->video != '[]')
        <div class="video-background">
            <video autoplay loop muted>
                <source src="{{ $videoUrl }}" type="video/mp4">
            </video>
        </div>
    @else
        <div class="video-background">
            <img src="{{ Voyager::image($homepage->image) }}" alt="Page Image">
        </div>
    @endif

@endsection