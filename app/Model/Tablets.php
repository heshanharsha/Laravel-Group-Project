<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tablets extends Model
{
  protected $fillable =
  [
    'brand',
    'model',
    'technology',
    'announced',
    'status',
    'dimensions',
    'weight',
    'sim',
    'type',
    'size',
    'resolution',
    'multitouch',
    'os',
    'chipset',
    'cpu',
    'gpu',
    'cardslot',
    'internal',
    'primary',
    'features',
    'video',
    'secondary',
    'alerttypes',
    'loudspeaker',
    'jack',
    'wlan',
    'bluetooth',
    'gps',
    'nfc',
    'radio',
    'usb',
    'sensors',
    'messaging',
    'browser',
    'battery',
    'colors',
    'price'
  ];
}
