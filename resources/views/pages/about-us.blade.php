@extends('layouts.default')

@section('meta')
    <title>The Awan Villa - One Bed Room</title>
    <meta content="best villa in bali" name="description">
    <meta content="bali room booking, car rental bali, bali management property" name="keywords">
@endsection

@section('content')

   
<!--Villa-->
<section id="villas" class="scrollto clearfix">
  <div class="row clearfix">

      <div class="col-1">

            {!! $pages->content !!}

      </div>


  </div>
</section>
<!--End of Villa-->

<!--Content Section-->
<div id="services" class="scrollto clearfix">

<div class="row no-padding-bottom clearfix">

    <div class="tengah">
        <div class="section-heading">
            <h2 style="font-family:'MAIAN';font-weight: bold;"></h2>
        </div>

    </div>


</div>


</div>
<!--End of Content Section-->




<!--maps-->
<section id="maps" class="scrollto clearfix">
  <div class="row-maps clearfix">

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1950637291725!2d115.15047537590551!3d-8.672991588291344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2476d6fd93ac5%3A0x336afb89db0054f2!2sThe%20Awan%20Villas!5e0!3m2!1sid!2sid!4v1737874401447!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
</section>
<!--End of maps-->
   

@stop