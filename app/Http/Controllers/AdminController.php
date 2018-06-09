<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Phone;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function phone()
    {
      return view('admindashboard.phone');
    }

    public function laptop()
    {
      return view('admindashboard.laptop');
    }

    public function tablet()
    {
      return view('admindashboard.tablet');
    }

    public function smartwatch()
    {
      return view('admindashboard.smartwatch');
    }

    

    public function submitSmartwatchDetails()
    {
      return true;
    }
}
