<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Model\Smartwatch;

class SmartwatchController extends Controller
{


  public function submitSmartwatchDetails(Request $request)

  {
      $table = new Smartwatch();

      $table->brand       = $request->input('brand');
      $table->model       = $request->input('model');
      $table->technology  = $request->input('technology');
      $table->announced   = $request->input('announced');
      $table->status      = $request->input('status');
      $table->dimensions  = $request->input('dimensions');
      $table->weight      = $request->input('weight');
      $table->sim         = $request->input('sim');
      $table->type        = $request->input('type');
      $table->size        = $request->input('size');
      $table->resolution  = $request->input('resolution');
      $table->multitouch  = $request->input('multitouch');
      $table->os          = $request->input('os');
      $table->chipset     = $request->input('chipset');
      $table->cpu         = $request->input('cpu');
      $table->gpu         = $request->input('gpu');
      $table->cardslot    = $request->input('cardslot');
      $table->internal    = $request->input('internal');
      $table->camera     = $request->input('camera');
      $table->alerttypes  = $request->input('alerttypes');
      $table->loudspeaker = $request->input('loudspeaker');
      $table->jack        = $request->input('jack');
      $table->wlan        = $request->input('wlan');
      $table->bluetooth   = $request->input('bluetooth');
      $table->gps         = $request->input('gps');
      $table->nfc         = $request->input('nfc');
      $table->radio       = $request->input('radio');
      $table->usb         = $request->input('usb');
      $table->sensors     = $request->input('sensors');
      $table->messaging   = $request->input('messaging');
      $table->browser     = $request->input('browser');
      $table->battery     = $request->input('battery');
      $table->standby     = $request->input('standby');
      $table->colors      = $request->input('colors');
      $table->price       = $request->input('price');

      $table->save();

      return redirect()->back()->with('message','Smartwatch addes succesfully');

  }

  // public function submitSmartwatchDetails(Request $request)
  // {
  //   // code...
  //   return("hjgsjgjhdgsjgdjs");
  // }
}
