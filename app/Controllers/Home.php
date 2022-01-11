<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('hello/world');
	}

	public function about()
	{
		return view('hello/about');
	}
	public function location()
	{
		return view('hello/location');
	}
}
