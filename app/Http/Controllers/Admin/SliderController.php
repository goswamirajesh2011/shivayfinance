<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slider::get();
        //dd($slides);
        return view('admin.slider.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
        return view('admin.slider.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = Slider::find($id);
        //dd($slider->toArray());
        return view('admin.slider.edit', compact('slide'));
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
