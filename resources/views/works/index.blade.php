@extends('layout.app')

@section('body')

<div class="row work-background-index d-inline-flex mobile-view">

    @foreach ($works as $work)

        <div class="col-md-4 d-md-flex d-sm-none work-background position-relative">
            <a href="{{ route('work.show' , $work->slug) }}">
                <img class="img-fluid" src="{{ Voyager::image($work->indexImage) }}" alt="{{ $work->title }}">
            </a>
        </div>
        
        <div class="col-sm-12 d-sm-flex d-md-none work-background-full position-relative">
            <a href="{{ route('work.show' , $work->slug) }}">
                <img class="img-fluid" src="{{ Voyager::image($work->indexImage) }}" alt="{{ $work->title }}">
            </a>
        </div>

    @endforeach
    
    
</div>

@endsection