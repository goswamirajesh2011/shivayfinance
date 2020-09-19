<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

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
    public function show($slug = null){
        $page = Page::where(['slug'=>$slug])->get()->toArray();
        //dd($page);
        if( !empty($page) ){
            return view('front.page', compact('page'));
        }else{
            return view('front.404');
        }
    }
}
