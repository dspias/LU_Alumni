<?php

namespace App\Http\Controllers\Admin\Admin_auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Dashboard\DashboardController;

class AdminLoginController extends Controller
{
    protected $redirectTo = 'admin/dashboard';

	public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
        
    }

   public function login(Request $request){

    // return $request;

     if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('admin.dashboard.index');
     } else {
        return "email or password is not match please try again!!!";
     }

   }

   /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
   
}
