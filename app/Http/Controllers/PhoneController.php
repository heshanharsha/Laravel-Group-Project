<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Model\Phone;

class PhoneController extends Controller
{
  public function submitPhoneDetails(Request $request)
  {
      $table = new Phone();

      $table->brand       =$request->input('brand');
      $table->model       =$request->input('model');

      $table->save();
     // Phone::create($request->all());
     // return "You are registerd";
     return redirect()->back()->with('message','phone addes succesfully');
  }

  // public function submitPhoneDetails(Request $request)
  // {
  //       $this->validate($request, [
  //           'brand' => 'required',
  //           'model' => 'required',
  //       ]);
  //
  //
  //       $phone = new Phone([
  //           'brand' => $request->input('brand'),
  //           'model' => $request->input('model'),
  //       ]);
  //       $phone->save();
  //
  //       return redirect()->route('dashboard.phone');
  //
  // }
}
