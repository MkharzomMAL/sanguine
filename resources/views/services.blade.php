@extends('layout.app')

@section('body')

<div class="container">

    @if($servicepage->video != '[]')
        <div class="video-background-pages services">
            <video autoplay loop muted>
                <source src="{{ asset('storage/' . $videoData[0]->download_link) }}" type="video/mp4">
            </video>
        </div>
    @else
        <div class="video-background-pages services">
            <img src="{{ Voyager::image($servicepage->coverImage) }}" alt="Page Image">
        </div>
    @endif

    <div class="container text-center mt-5">
        <h5 class="text-white">{{ $servicepage->heading }}</h5>
        <div class="image-logo flex-row d-flex justify-content-center mt-5">
        @foreach ($companies as $company)
            
                <img class="bg-black" src="{{ Voyager::image($company->logo) }}" alt="Page Image">
            
        @endforeach
        </div>
    </div>

    <div class="text-container p-4">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h1>{{ $servicepage->title }}</h1>
                <div class="email d-flex">
                    <i class="fa fa-envelope-o pr-1 mt-1 me-2"></i>
                    <p>{{ $ContactUs->email1 }}</p>
                </div>
                    
            </div>
            <div class="row col-md-6 col-sm-12">
                <div class="col-6">
                    <p>{!! $servicepage->content !!}</p>
                </div>
                <div class="col-6">
                    <p>{!! $servicepage->content2 !!}</p>
                </div>
                
            </div>
        </div>
        
    
    </div>

</div>




    

@endsection