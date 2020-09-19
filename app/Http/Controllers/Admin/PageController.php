<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::paginate(10);
        //dd($loans->toArray());
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
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
            'content' => 'required',
            'slug' => 'required|unique:pages',
        ]);
        //dd($request);

        $page = Page::create([
            'name' => $request->name,
            'content' => $request->content,
            'slug' => $request->slug,
            'excerpt' => $request->excerpt,
            'status' => 1
        ]);
        $page->save();
        return redirect()->route('admin.page.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.page.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        //dd($page->toArray());
        return view('admin.page.edit', compact('page'));
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
            "content" => "required",
            //'slug' => 'required|unique:pages',
        ]);
        $page = Page::find($id);
        $page->name = $request->name;
        $page->content = $request->content;
        $page->excerpt = $request->excerpt;
        $page->slug = $request->slug;
        $page->save();
        return redirect()->route('admin.page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        //dd($page->toArray());
        $page->delete();
        return response()->json(array('data' => $page));
    }

    public function slugExist($slug){
        $page = Page::where('slug', '=', $slug)->get();
        //dd( $page->count() );
        if( $page->count() ){
            return response()->json(['exist'=>true], 200);
        }else{
            return response()->json(['exist'=>false], 200);
        }
    }
}
