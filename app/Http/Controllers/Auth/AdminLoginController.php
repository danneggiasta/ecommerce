<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:admin');
	}

    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
    	// Validate the form data
    	$this->validate($request, [
    		'email'		=> 'required|email',
    		'password'	=> 'required|min:6'
    	]);

    	$credentials = [
    		'email'		=> $request->email,
    		'password'	=> $request->password
    	];

    	// Attempt to login
    	if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
			// If successful, then redirect to their intended location
			return redirect()->intended(route('admin.dashboard'));
    	}    	

    	// If unsuccessful, redirect back to login with the form data
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
