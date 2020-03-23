<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index($value='')
    {
    	return view('frontend.index');
    }
    public function property($value='')
    {
    	return view('frontend.property');
    }
    public function agent($value='')
    {
    	return view('frontend.agent');
    }
    public function blog($value='')
    {
    	return view('frontend.blog');
    }
}
