<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
	* Display the page.
	*
	*/
    public function show($name = null){
    	if($name == 'about'){
    		return view('front.page.about');
    	}else if($name == 'contact'){
    		return view('front.page.contact');
    	}else{
    		return view('front.page.404');
    	}
    }
}
