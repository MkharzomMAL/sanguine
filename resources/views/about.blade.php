@extends('layout.app')

@section('body')

<div class="container">

    @if($aboutpage->video != '[]')
        <div class="video-background-pages">
            <video autoplay loop muted>
                <source src="{{ asset('storage/' . $videoData[0]->download_link) }}" type="video/mp4">
            </video>
        </div>
    @else
        <div class="video-background-pages">
            <img src="{{ Voyager::image($aboutpage->coverImage) }}" alt="Page Image">
        </div>
    @endif

    <div class="text-container p-4">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h1>{{ $aboutpage->title }}</h1>
            </div>
            <div class="col-md-6 col-sm-12">
                <p>{!! $aboutpage->content !!}</p>
            </div>
        </div>
        
    
    </div>

</div>




    

@endsection