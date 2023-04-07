@extends('layout.app')

@section('body')

<div class="container">
  
  <div class="video-background-teamSlider" style="z-index: 9999">
    <div class="row">
      <div class="col-12 columns d-flex">
        <div class="loop owl-carousel owl-theme">
          @foreach ($members as $member)
            <div class="item">
              <img src="{{ Voyager::image($member->image) }}" alt="">
            </div>
          @endforeach
          
        </div>
  
        <script>
          jQuery(document).ready(function($) {
            $('.loop').owlCarousel({
              center: true,
              items: 2,
              loop: true,
              margin: 0,
              dots: false,
              responsive: {
                600: {
                  items: 4
                }
              },
              startPosition: 'left'
            });
          });
        </script>

      </div>
    </div>
    <div class="w-100 pt-4 p-4">
      <div class="row">
          <div class="col-md-6 col-sm-12">
              <h1>Meet Our Team</h1>
          </div>
          <div class="col-md-6 col-sm-12">
              <p>dasdas</p>
          </div>
      </div>
      
    
    </div>
    
  </div>

  
  

</div>



@endsection