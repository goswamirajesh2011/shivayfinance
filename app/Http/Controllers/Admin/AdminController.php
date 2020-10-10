<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Setting;
use App\Admin;
use App\LoanRequest;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest:admin')->except('logout');
    }

    /**
     * Display dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $title = "Dashboard";
        return view('admin.dashboard', compact('title'));
    }

    /**
     * Display register forn.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('admin.register');
    }

    /**
     * Admin store.
     *
     * @return \Illuminate\Http\Response
     */
    protected function store(Request $request)
    {
        //dd($request->toArray());
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        try{
            $admin = Admin::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->route('admin.login');
        }catch (Exception $e){
            return $e;
        }
    }

    /**
     * Display login forn.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * login post.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminAuth(Request $request)
    {
        //dd($request->toArray());
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors(['err_msg'=>'Email or Password is not correct'])->withInput($request->only('email', 'remember'));
    }

    /**
     * logout admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    /**
     * Display Settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        $title = "Settings";
        return view('admin.settings', compact('title'));
    }
    
    /**
     * Display Settings Edit.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings_edit()
    {
        $title = "Settings Edit";
        return view('admin.settings-edit', compact('title'));
    }

    /**
     * Admin settings store.
     *
     * @return \Illuminate\Http\Response
     */
    protected function settings_store(Request $request)
    {
        /*$this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);*/

        try{
            $logoPath = $request->file('logo')->store('uploads', 'public');
            $storageName = basename($logoPath);

            Setting::set('site_name', $request->site_name);
            Setting::set('logo', $storageName);

            return redirect()->route('admin.settings-edit')->with('success', 'Settings Updated Successfully');
        }catch (Exception $e){
            return $e;
        }
    }

    /**
     * get user loan request.
     *
     * @return \Illuminate\Http\Response
     */
    public function user_loan_requests()
    {
        $title = "User Loan Request";
        $loanRequests = LoanRequest::with('loan')->get();
        //dd($loanRequests->toArray());
        return view('admin.loan.requests', compact('title', 'loanRequests'));
    }

}
