@extends('layouts.default')


@section('meta')
    <title>The Awan Villa - Seminyak</title>
    <meta content="best villa in bali" name="description">
    <meta content="bali room booking, car rental bali, bali management property" name="keywords">
@endsection

@section('content')




   
<section id="about" class="introduction scrollto">
  

  <div class="row clearfix">

      <div class="tengah">
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';font-weight: bold;">- Welcome to The Awan Villas Seminyak - </h2>
              <p class="section-subtitle">
Come and indulge in our little slice of heaven. Inspired by the essence of "Awan," meaning cloud, our villas embody serenity, tranquility, and comfort for every guest. Designed with spacious and open layouts, our villas are perfect for relaxation, sunbathing, and quality time with loved ones.
</p><p class="section-subtitle">Surrounded by lush green gardens and a beautifully landscaped outdoor pool, our villas offer a peaceful and calming retreat. Experience the ultimate getaway in Seminyak, where every moment is a chance to unwind and rejuvenate.
</p>
<button class="btn btn-open hidden">Open Modal</button>
          </div>

      </div>
  </div>
</section>

<style>

.modal {
  display: flex;
  flex-direction: column;
  justify-content: center;
  /* gap: 0.4rem; */
  /* width: 450px; */
  /* padding: 1.3rem; */
  /* min-height: 250px; */
  position: absolute;
  z-index: 5;
  top: 4%;
  background-color: white;
  border: 1px solid #ddd;
  /* border-radius: 15px; */
  margin: 0 25%;
}

.modal .flex {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.modal input {
  padding: 0.7rem 1rem;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 0.9em;
}

.modal p {
  font-size: 0.9rem;
  color: #777;
  margin: 0.4rem 0 0.2rem;
}

button {
  cursor: pointer;
  border: none;
  font-weight: 600;
}

.btn-open {
  position: absolute;
  bottom: 150px;
}

.btn-close {
  transform: translate(10px, -20px);
  padding: 0.5rem 0.7rem;
  background: #eee;
  border-radius: 50%;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  backdrop-filter: blur(3px);
  z-index: 3;
}

.hidden {
  display: none;
}

    </style>

<div class="modal hidden">
  <div >
    <button class="btn-close ">⨉</button>
    <button class="button btn-tutup hidden">Close</button>
  </div>
  <div>
    
    @foreach($promos as $item)
        
        <!--Content Section-->
        <div class="scrollto">

          <div class="row no-padding-bottom">
            

              <div class="col-1">
                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->title }}" />
                  <!-- <div class="section-heading"> -->
                      <!-- <h2 style="font-family:'MAIAN';">{{ $item->title }}</h2> -->
                  <!-- </div> -->
                  <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
              </div>

          </div>
          <a href="{{ $item->link }}" class="button">Learn More</a>
        </div>
        <!--End of Content Section-->
        
    @endforeach
  </div>

  
</div>

<div class="overlay hidden"></div>

<script>
  const modal = document.querySelector(".modal");
  const overlay = document.querySelector(".overlay");
  const btnOpen = document.querySelector(".btn-open");
  const btnClose = document.querySelector(".btn-close");
  const btnTutup = document.querySelector(".btn-tutup");

  btnOpen.addEventListener("click", function () {
    modal.classList.remove("hidden");
    overlay.classList.remove("hidden");
  });

  btnClose.addEventListener("click", function () {
    modal.classList.add("hidden");
    overlay.classList.add("hidden");
  });
  btnTutup.addEventListener("click", function () {
    modal.classList.add("hidden");
    overlay.classList.add("hidden");
  });
  document.addEventListener('DOMContentLoaded', function() {
    // alert("Ready!");
    if ({{ $promos->isNotEmpty() }}) {
      modal.classList.remove("hidden");
      overlay.classList.remove("hidden");
    }
  }, false);
  </script>
<!--Villa-->
<section id="villas" class="scrollto clearfix">
  <div class="row clearfix">

      <div class="col-2">

          <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
              <h2 style="font-family:'MAIAN';">One Bedroom Villas with Private Pool</h2>
              <p >Experience the ultimate in luxury and relaxation in our stunning One Bedroom Villas with Private Pool.</p>
              <a href="/one-bedroom" class="button">More Details <i class="fa fa-play" aria-hidden="true"></i></a>
              @php
                $firstImage = $galeries->where('id_album', 1)->first();
              @endphp
              @if($firstImage)
                <img src="{{ asset('storage/images/' . $firstImage->nama_foto) }}" alt="{{ $firstImage->nama_foto }}">
              @endif
          </div>
          
      </div>

      <div class="col-2">

          <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
              <h2 style="font-family:'MAIAN';">Two Bedroom Villas with Private Pool</h2>
              <p >Experience the ultimate in luxury and relaxation in our stunning Two Bedroom Villas with Private Pool.</p>
              <a href="/two-bedroom" class="button">More Details <i class="fa fa-play" aria-hidden="true"></i></a>
              @php
                $firstImage = $galeries->where('id_album', 2)->first();
              @endphp
              @if($firstImage)
                <img src="{{ asset('storage/images/' . $firstImage->nama_foto) }}" alt="{{ $firstImage->nama_foto }}">
              @endif
          </div>
          
      </div>

  </div>
</section>
<!--End of Villa-->

<!--Content Section-->
<div id="services" class="scrollto clearfix">

  <div class="row no-padding-bottom clearfix">

      <div class="tengah">
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';font-weight: bold;">- Provided Services -</h2>
          </div>

      </div>

      <!--Content of the Right Side-->
      <div class="col-2 wow fadeInLeft">
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';">●	In-Villa Spa</h2>
              <p class="section-subtitle">Indulge in the ultimate relaxation experience with our In-Villa Spa services. Enjoy rejuvenating treatments in the comfort and privacy of your own villa.</p>
          </div>
          <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
      </div>
      <!--End Content Right Side-->

      <div class="col-2 wow fadeInRight">
          <img src="{{asset('assets/images/spa.jpg')}}" alt="Dancer"/>
      </div>

      <!--Content of the Right Side-->
      <div class="col-3 wow fadeInLeft">
      <img src="{{asset('assets/images/floating.jpg')}}" alt="Dancer"/>
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';">●	Floating Breakfast</h2>
              <p class="section-subtitle">Start your day in paradise with our signature Floating Breakfast experience. Indulge in a Delicious Breakfast Enjoy a mouth-watering breakfast, carefully prepared by our chefs, and served to you in the comfort of your own private pool.
              </p>
          </div>
          <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
      </div>
      <!--End Content Right Side-->

      <!-- <div class="col-6 wow fadeInRight">
          <img src="{{asset('assets/images/dining.jpg')}}" alt="Dancer"/>
      </div> -->

      <div class="col-3 wow fadeInLeft">
      <img src="{{asset('assets/images/romantic.jpg')}}" alt="Dancer"/>
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';">●	Romantic Dinner</h2>
              <p class="section-subtitle">Celebrate love and romance with a unforgettable dinner experience under the stars.</p>
          </div>
          <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
      </div>

      <div class="col-3 wow fadeInLeft">
      <img src="{{asset('assets/images/honeymoon.jpg')}}" alt="Dancer"/>
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';">●	Honeymoon Decoration</h2>
              <p class="section-subtitle">Make your dream honeymoon even more unforgettable with our romantic decoration packages.
              Transform your villa into a love nest with our beautifully crafted decoration packages
              </p>
          </div>
          <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
      </div>


  </div>


</div>
<!--End of Content Section-->


  <!--Gallery-->
<aside id="gallery" class="row text-center scrollto clearfix" data-featherlight-gallery data-featherlight-filter="a">
      <div class="tengah">
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';font-weight: bold;">- Foto Gallery -</h2>
          </div>

      </div>
      <div class="gallery-categories">
        <button class="button" onclick="filterGallery('all')">All</button>
        @foreach($albums as $item)
          <button class="button" onclick="filterGallery('{{$item->id}}')">{{ $item->nama_album }}</button>
        @endforeach
      </div>

      <script>
        function filterGallery(category) {
          var items = document.querySelectorAll('#gallery a');
          items.forEach(function(item) {
            if (category === 'all' || item.classList.contains(category)) {
              item.style.display = 'block';
            } else {
              item.style.display = 'none';
            }
          });
        }
      </script>
      <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
        @foreach($galeries as $item)
          <a href="{{ asset('storage/images/' . $item->nama_foto) }}" data-featherlight="image" class="col-3 wow fadeIn {{$item->id_album}}"
            data-wow-delay="0.2s">
            <img src="{{ asset('storage/images/' . $item->nama_foto) }}" alt="{{ $item->nama_foto }}"/>
          </a>
        @endforeach
      </div>

</aside>
  <!--End of Gallery-->

<!--Content Section-->
<!-- 
<div id="services" class="scrollto clearfix">

  <div class="row no-padding-bottom clearfix">

      <div class="tengah">
          <div class="section-heading">
              <h2 style="font-family:'MAIAN';font-weight: bold;">- SPA -</h2>
          </div>

      </div>

      <div class="col-2 wow fadeInRight">
          <img src="{{asset('assets/images/spa.jpg')}}" alt="Dancer"/>
      </div>

      <div class="col-2 wow fadeInLeft">
          <div class="section-heading">
              <h2 class="section-title">In Villa Spa</h2>
              <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam!</p>
          </div>
          <a href="#" data-videoid="UYJ5IjBRlW8" data-videosite="youtube" class="button video link-lightbox">
              WATCH VIDEO <i class="fa fa-play" aria-hidden="true"></i>
          </a>
      </div>
  </div>
</div> -->

<!--End of Content Section-->

<!--Clients-->
<!-- <section id="clients" class="scrollto clearfix">
  <div class="row clearfix">

      <div class="col-3">

          <div class="section-heading">
              <h2 class="section-title">Best Villa Facilities</h2>
              <p class="section-subtitle">Some of ouf villa Facilities</p>
          </div>

      </div>

      <div class="col-2-3">

          <a href="#" class="col-3">
              <img src="{{asset('assets/images/icon/pool.png')}}" wi alt="Company"/>
              <div class="client-overlay"><span>Private Pool Size: 7m x 3m x 1,5m</span></div>
          </a>
          <a href="#" class="col-3">
          <img src="{{asset('assets/images/icon/desk.png')}}" alt="Company"/>
              <div class="client-overlay"><span>24Hour Front Office</span></div>
          </a>
          <a href="#" class="col-3">
          <img src="{{asset('assets/images/icon/wifi.png')}}" alt="Pool"/>
              <div class="client-overlay"><span>High Spped Wifi</span></div>
          </a>
          <a href="#" class="col-3">
          <img src="{{asset('assets/images/icon/villa.png')}}" alt="Pool"/>
              <div class="client-overlay"><span>High Spped Wifi</span></div>
          </a>
          <a href="#" class="col-3">
          <img src="{{asset('assets/images/icon/plug.png')}}" alt="Pool"/>
              <div class="client-overlay"><span>High Spped Wifi</span></div>
          </a>
          <a href="#" class="col-3">
          <img src="{{asset('assets/images/icon/bed.png')}}" alt="Pool"/>
              <div class="client-overlay"><span>High Spped Wifi</span></div>
          </a>
          <a href="#" class="col-3">
          <img src="{{asset('assets/images/icon/door.png')}}" alt="Pool"/>
              <div class="client-overlay"><span>High Spped Wifi</span></div>
          </a>

      </div>

  </div>
</section> -->
  <!--End of Clients-->



<!--maps-->
<section id="maps" class="scrollto clearfix">
  <div class="row-maps clearfix">

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1950637291725!2d115.15047537590551!3d-8.672991588291344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2476d6fd93ac5%3A0x336afb89db0054f2!2sThe%20Awan%20Villas!5e0!3m2!1sid!2sid!4v1737874401447!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
</section>
<!--End of maps-->
   

@stop