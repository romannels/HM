
@extends('layouts.master')

@section('title', 'Main Page')

@section('header')
{!! Html::style('assets/css/home.css') !!}
@stop

@section('content')
<style>
     .container {
         padding-left: 0px;
         padding-right: 0px;
     }

     .carousel-inner > .item > img,
     .carousel-inner > .item > a > img {
         width: 100%;
         margin: auto;
     }
</style>
<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
          {{ Html::image('assets/media/images/front.jpg', 'Haven Manor')}} 
      </div>

      <div class="item">
          {{ Html::image('assets/media/images/diningroom.jpg', 'Dining Room')}} 
      </div>
    
      <div class="item">
          {{ Html::image('assets/media/images/hallway.jpg', 'Hallway')}} 
      </div>

      <div class="item">
           {{ Html::image('assets/media/images/wide_logo_white.jpg', 'logo')}} 
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <div class="row">
        <div class="col-md-12">
	<h1>Haven Manor</h1>
	<hr>
	</div>
    </div>
    <div class="row">
	<div class="col-md-1"></div>
        <div class="col-md-10">
	    Seniors ease into assisted living at Haven Manor. It's a low stress way of life, less complicated with more enjoyment and help when you need it. Haven Manor's Assisted Living...PLUS† offers the most comprehensive range of services in our area: respite care and long-term stays, memory care, hospice support, and adult day care. When you're looking for a senior living home, it's important to try to make only one move. Most health changes can be handled right here, in the same comfortable familiar place.
	</div>
	<div class="col-md-1"></div>
    </div>
</div>
       <!-- <div class="container">
	    <script src="http://v9.anv.bz/scripts/anv_mcp_9.js" type="text/javascript"></script><script type="text/javascript">var p = new anv_pl_def();p.loadVideoWithKey("eyJwIjoiNCIsIm0iOiJHUlRWIiwidiI6IjM0MjY5OTAifQ==");</script>
        </div>-->
@stop
