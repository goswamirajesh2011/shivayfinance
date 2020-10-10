<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Loan;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Loans";
        $loans = Loan::paginate(10);
        //dd($loans->toArray());
        return view('admin.loan.index', compact('loans', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Loan Create";
        return view('admin.loan.create', compact('title'));
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
            'description' => 'required',
        ]);
        //dd($request);

        $loan = Loan::create([
            'name' => $request->name,
            'description' => $request->description,
            'doc_req' => $request->doc_req,
            'faq' => $request->faq,
            'status' => 1,
            'icon' => $request->icon
        ]);
        $loan->save();
        return redirect()->route('admin.loan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Loan";
        return view('admin.loan.show', compact('title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Loan Edit";
        $loan = Loan::find($id);
        //dd($loan->toArray());
        return view('admin.loan.edit', compact('loan', 'title'));
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
            "description" => "required",
        ]);
        $loan = Loan::find($id);
        $loan->name = $request->name;
        $loan->description = $request->description;
        $loan->doc_req = $request->doc_req;
        $loan->faq = $request->faq;
        $loan->icon = $request->icon;
        $loan->save();
        return redirect()->route('admin.loan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loan = Loan::find($id);
        //dd($loan->toArray());
        $loan->delete();
        return response()->json(array('data' => $loan));
    }
}
