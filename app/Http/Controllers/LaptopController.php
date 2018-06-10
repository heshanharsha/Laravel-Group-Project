<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Model\Laptop;

class LaptopController extends Controller
{
  public function submitLaptopDetails(Request $request)
  {
      $table = new Laptop();

      $table->brand       =$request->input('brand');
      $table->model       =$request->input('model');
      $table->os          =$request->input('os');
      $table->processor   =$request->input('processor');
      $table->graphics    =$request->input('graphics');
      $table->display     =$request->input('display');
      $table->memory      =$request->input('memory');
      $table->harddrive   =$request->input('harddrive');
      $table->opticaldrive=$request->input('opticaldrive');
      $table->battery     =$request->input('battery');
      $table->color       =$request->input('color');
      $table->webcam      =$request->input('webcam');
      $table->audio       =$request->input('audio');
      $table->pointingdevice=$request->input('pointingdevice');
      $table->weight      =$request->input('weight');


      $table->save();

     return redirect()->back()->with('message','Laptop addes succesfully');
  }
}
