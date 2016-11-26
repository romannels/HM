<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Haven Manor - @yield('title')</title>

        {!! Html::style('assets/css/app.css') !!}

	@yield('header')

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
    <body>
        <nav class="navbar navbar-inverse">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	      </button>
	      <a class="navbar-left" href="/">{{ Html::image('assets/media/images/hm_hickman_05-2016001009.jpg', 'Haven Manor', array('style' => 'max-height: 80px;')) }}</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
		<li><a href="/">Home<span class="sr-only">(current)</span></a></li>
		<li><a href="/calendar">Calendar</a></li>
		<li class="dropdown">
		  <a href="/about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><a href="/about/general_info">General Info</a></li>
		    <li><a href="/about/FAQ">FAQ</a></li>
		    <li><a href="/about/facilit_info">Facility Info</a></li>
		    <li><a href="/news">News</a></li>
		  </ul>
		</li>
		<li class="dropdown">
		  <a href="/services" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><a href="/list_of_services">List of Services</a></li>
		    <li><a href="/assisted_living">Assisted Living</a></li>
		    <li><a href="/short_term_care">Short Term Care</a></li>
		    <li role="separator" class="divider"></li>
		    <li><a href="/haven_day_program">Haven Day Program</a></li>
		    <li role="separator" class="divider"></li>
		    <li><a href="/hospice_support">Hospice Support</a></li>
		  </ul>
		</li>
		<li><a href="/contact_us">Contact Us</a></li>
		<form class="navbar-form navbar-left" role="search">
			<div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Haven Manor">
			    <div class="input-group-btn">
			        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			    </div>
			</div>
                </form>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	 <div class="container">
            @yield('content')
        </div> 
        <div class="container-fluid"> 
             @yield('content_fluid')
        </div>
	<div class="container">
	    @yield('content_bottom')
	</div>
<!--	<div class="navbar navbar-fixed-bottom row-fluid">
	  <div class="navbar-inner">
	    <div class="container">
	     Haven Manor 2016
		<div class="fb-follow" data-href="https://www.facebook.com/havenmanor" data-width="100" data-height="30" data-layout="standard" data-size="small" data-show-faces="true"></div> 
	    </div>
	  </div>
	</div> -->
	<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
	{{ Html::script('assets/js/bootstrap.min.js') }}
	<div id="fb-root"></div>
	<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
    </body>
</html>
