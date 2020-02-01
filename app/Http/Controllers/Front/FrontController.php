<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
	* Display the Frontpage.
	*
	*/
    public function index(){
    	$slides = Slider::where(["status"=>1])->get();
    	//dd($slides->toArray());
    	return view('front.index', compact('slides'));
    }
}
