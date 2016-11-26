<?php

namespace HM\Http\Controllers;

use Illuminate\Http\Request;

use HM\Http\Requests;

class NewsController extends Controller
{
	public function showNews() {
		return view('news');
	}
}
