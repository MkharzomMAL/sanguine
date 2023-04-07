@extends('layout.app')

@section('body')

<div class="container">
  
  <div class="video-background-teamSlider" style="z-index: 9999">
    <div class="row">
      <div class="col-12 columns d-flex">
        <div class="loop owl-carousel owl-theme">
          @foreach ($members as $member)
          <div class="item" id="M{{ $member->id }}" style="position: relative;" onclick="myfunc('{{ $member->id }}','{{ $member->full_name }}','{{ $member->summary }}')">
            <img src="{{ Voyager::image($member->image) }}" alt="">
            <div class="memberCard" id="M{{ $member->id }}">
              <span><strong>{{ $member->full_name }}</strong></span><br>
              <span>{{ $member->title }}</span><br>
              <span>{{ $member->pos }}</span>
            </div>
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

          function myfunc(id,name,summary){
            
            var memberCards = document.querySelectorAll(".memberCard");
            var items = document.querySelectorAll(".item");

            var header = document.getElementById('header');
            header.textContent = name;

            var brief = document.getElementById('contnet');
            brief.textContent = summary;

            memberCards.forEach(function(card) {
              if (card.id === "M" + id) {
                card.classList.toggle("show");
              } else {
                card.classList.remove("show");
              }
            });
            items.forEach(function(card) {
              if (card.id === "M" + id) {
                card.classList.toggle("show");
              } else {
                card.classList.remove("show");
              }
            });

            
          }
        </script>

        

      </div>
    </div>
    <div class="w-100 pt-3 p-4">
      <div class="row">
          <div class="col-md-6 col-sm-12">
              <h1 id="header">{{ $teamPage->title }}</h1>
          </div>
          <div class="col-md-6 col-sm-12">
              <p id="contnet">{{ $teamPage->content }}</p>
          </div>
      </div>
      
    
    </div>
    
  </div>

  
  

</div>



@endsection


