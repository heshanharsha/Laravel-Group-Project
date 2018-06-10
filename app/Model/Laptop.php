<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
  protected $fillable = ['brand','model','os','processor','graphics','display','memory','harddrive','opticaldrive','battery','color','webcam','audio','pointingdevice','weight'];
}
