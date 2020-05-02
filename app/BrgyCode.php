<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrgyCode extends Model
{
  protected $table = 'brgy_codes';
  protected $fillable = ['code', 'longitude', 'latitude', 'route', 'locality', 'country', 'region'];
}