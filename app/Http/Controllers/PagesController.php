<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function getIndex() 
	{
		return view('pages.home.index');
	}

	public function getAbout()
	{
		return view('pages.about.index');
	}
}
