<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
@include('includes.head')
@yield('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@yield('media')

<style type="text/css">
	.swiper-container {
      /* width: 100%; */
      /* height: 400px; */
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    
</style>
</head>


<body>

  <!-- Preloader -->
  <div id="preloader">
      <div id="status" class="la-ball-triangle-path">
          <div></div>
          <div></div>
          <div></div>
      </div>
  </div>
  <!--End of Preloader-->

  <!-- <div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
      <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
      <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
      <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
      <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
  </div> -->

  <div id="wrapper">
    <!-- ======= Header ======= -->


    @if (Route::is('home'))
      @include('includes.headmenu')
    @else
      @include('includes.headmenudetail', ['pages' => $pages])
    @endif 

    <main id="content">
      <!-- @include('pages.notification') -->
      <!-- ======= About Section ======= -->
      @yield('content')
      @yield('scripts')
      <div class="popup-container" id="popupContainer">
            <a href="https://api.whatsapp.com/send?phone=6287818175969&text=&source=&data=" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>
            <div class="popup-content" id="popupContent">
                <img src="{{asset('assets/images/wa.png')}}" /><br />
                Scan Me
            </div>
        </div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="landing-footer" class="clearfix">
    @include('includes.footer')

    </footer><!-- End Footer -->
    <!-- End Footer -->
 
  </div>
  @include('includes.footerjs')

</body>

</html>