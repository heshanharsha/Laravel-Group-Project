<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Phone;

class PhoneController extends Controller
{
  public function submitPhoneDetails(Request $request)
  {
    Phone::create($request->all());
    return "You are registerd";
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
