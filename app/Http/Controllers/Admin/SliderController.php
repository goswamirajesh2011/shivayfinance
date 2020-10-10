<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Slider;
use App\Loan;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Slider";
        $slides = Slider::get();
        //dd($slides);
        return view('admin.slider.index', compact('slides', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Slider Create";
        $loans = Loan::where('status', 1)->get();
        //dd($loans->toArray());
        return view('admin.slider.create', compact('loans', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'caption' => 'required',
        ]);
        //dd($request);

        $slidePath = $request->file('slide')->store('slider', 'public');
        $storageName = basename($slidePath);

        $slider = Slider::create([
            'name' => $request->name,
            'caption' => $request->caption,
            'slide' => $storageName,
            'loan_id' => $request->loan_id,
            'status' => 1
        ]);
        $slider->save();
        return redirect()->route('admin.slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        $title = "Slider";
        return view('admin.slider.show', compact('title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Slider Edit";
        $loans = Loan::where('status', 1)->get();
        $slide = Slider::find($id);
        //dd($slider->toArray());
        return view('admin.slider.edit', compact('slide', 'loans', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */ 
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "name" => "required",
            "caption" => "required",
        ]);
        $slide = Slider::find($id);
        $slide->name = $request->name;
        $slide->caption = $request->caption;
        $slide->loan_id = $request->loan_id;
        if( $request->hasFile('slide') ){
            $path = public_path("storage\slider\\$slide->slide");
            if( File::Exists($path) ){
                File::Delete($path);
            }
            $storagePath = $request->file('slide')->store('slider', 'public');
            $slide->slide = basename($storagePath);
            //dd($path);
        }
        $slide->save();
        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider = Slider::find($slider->id);
        //dd($slider->toArray());
        $path = storage_path("app\public\slider\\$slider->slide");
        File::delete($path);
        $slider->delete();
        return response()->json(array('data' => $slider));
    }
}
