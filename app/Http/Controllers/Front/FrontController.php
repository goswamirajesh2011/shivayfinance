<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Loan;
use App\Partner;
use App\LoanRequest;

class FrontController extends Controller
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
	* Display the Frontpage.
	*
	*/
    public function index(){
    	$slides = Slider::where(["status"=>1])->get();
        $loans = Loan::get();
        $partners = Partner::where(["status"=>1])->get();
    	//dd($partners->toArray());
    	return view('front.index', compact('slides', 'loans', 'partners'));
    }

    /**
    * Display the ApplyLoan page.
    *
    */
    public function applyloan($loanId = null){
        //dd($loanId);
        return view('front.applyloan', compact('loanId'));
    }

    /**
    * store loan request information.
    *
    */
    public function storeloan(Request $request){
        //dd($request->toArray());
        $this->validate($request, [
            'amount' => 'required',
            'email' => 'required|unique:loan_requests',
            'phone' => 'required|unique:loan_requests'
        ]);

        $loanRequest = LoanRequest::create([
            'loantype_id' => $request->loantype_id,
            'amount' => $request->amount,
            'purpose' => $request->purpose,
            'business_name' => $request->business_name,
            'business_age' => $request->business_age,
            'state' => $request->state,
            'city' => $request->city,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 1,
        ]);
        $loanRequest->save();
        return redirect()->route('front.applyloan', $request->loantype_id)->with('success', 'Your Loan request is taken! One of our candidate will contact you soon');
    }
}
