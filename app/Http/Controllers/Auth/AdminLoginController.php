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
    // admin login form controller
    public function showLoginform(){
      return view('auth.admin-login');
    }

    // login controller
    public function login(Request $request)
    {
      // validate the form database
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
        // if successfull, then redirect to the their intend location
        return redirect()->intended(route('admin.dashboard'));
      }
      // if unsuccessfull, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email','remember'));
    }
}
