<?php

namespace HM\Http\Controllers;

use Illuminate\Http\Request;

use HM\Http\Requests;

class CalendarController extends Controller
{
	public function showCalendar() {
		return view('calendar');
	}
}
