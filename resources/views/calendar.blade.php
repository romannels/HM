
@extends('layouts.master')

@section('title', 'Calendar')

@section('content_fluid')
<h1>Events for Today</h1>
<hr>
<div class="row">
    <div class="col-sx-12 col-sm-12 col-md-8">
	<a href="#" class="thumbnail nounderline" style="text-decoration: none !important;">
	    <h2>Going On Right Now</h2>
	    <div class="well">
		<div class="row">
		    <h3>Current Time</h3>
		    <div id="current_time"></div>
		</div>
	    </div>
	    <div class="row">
		<div class="col-xs-3">
	            <div class="thumbnail">
			{{ Html::image('assets/media/images/hm_hickman_05-2016001009.jpg', 'Haven Manor', array('style' => 'max-height: 165px;')) }}
	            </div>
		</div>
		<div class="col-xs-9">
		    <div class="thumbnail">
		    </div>
		</div>
	    </div>
	</a>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-4">
	<a href="#" class="thumbnail nounderline" style="text-decoration: none !important;">
	    <h2>Coming Up Next</h2>
	    <div class="thumbnail">
		<img src="">
	    </div>
	</a>
    </div>
</div>
<h2>Calendar</h2>
<script>
(function () {
    function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

    function startTime() {
        var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
        document.getElementById('current_time').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function () {
            startTime()
        }, 500);
    }
    startTime();
})();
</script>
@stop
