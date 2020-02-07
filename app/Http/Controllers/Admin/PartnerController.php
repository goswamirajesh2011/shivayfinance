<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Partner;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::paginate(5);
        //dd($partners);
        return view('admin.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
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

        $logoPath = $request->file('logo')->store('partner', 'public');
        $logoName = basename($logoPath);

        $partner = Partner::create([
            'name' => $request->name,
            'caption' => $request->caption,
            'logo' => $logoName,
            'status' => 1
        ]);
        $partner->save();
        return redirect()->route('admin.partner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.partner.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);
        //dd($partner->toArray());
        return view('admin.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "name" => "required",
            "caption" => "required",
        ]);
        $partner = Partner::find($id);
        $partner->name = $request->name;
        $partner->caption = $request->caption;
        if( $request->hasFile('logo') ){
            $path = public_path("storage\partner\\$partner->logo");
            if( File::Exists($path) ){
                File::Delete($path);
            }
            $storagePath = $request->file('logo')->store('partner', 'public');
            $partner->logo = basename($storagePath);
            //dd($path);
        }
        $partner->save();
        return redirect()->route('admin.partner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        //dd($partner->toArray());
        $path = storage_path("app\public\partner\\$partner->logo");
        File::delete($path);
        $partner->delete();
        return response()->json(array('data' => $partner));
    }
}
