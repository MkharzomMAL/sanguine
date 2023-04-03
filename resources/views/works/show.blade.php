@extends('layout.app')

@section('body')

<div class="container">

    @if($work->video != '[]')
        <div class="video-background-pages">
            <video id="myVideo" autoplay loop muted>
                <source src="{{ asset('storage/' . $videoData[0]->download_link) }}" type="video/mp4">
            </video>
        </div>
    @else
        <div class="video-background-pages">
            <img src="{{ Voyager::image($work->coverImage) }}" alt="Page Image">
        </div>
    @endif

    <div class="text-container p-4">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h1>{{ $work->title }}</h1>
                <p>{{ $work->location }}</p>

            </div>
            <div class="col-md-6 col-sm-12">
                <p>{!! $work->content !!}</p>
            </div>
        </div>
        
    
    </div>

</div>


<script>
    const video = document.getElementById("myVideo");

    // Add a click event listener to the video
    video.addEventListener("click", function() {
        video.muted = false;
        if (video.requestFullscreen) {
            video.requestFullscreen();
        } else if (video.webkitRequestFullscreen) { /* Safari */
            video.webkitRequestFullscreen();
        } else if (video.msRequestFullscreen) { /* IE11 */
            video.msRequestFullscreen();
        }
    });
</script>

    

@endsection