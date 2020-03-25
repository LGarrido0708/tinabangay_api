<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitedPlace extends APIModel
{
  protected $table = 'visited_places';
  protected $fillable = ['account_id', 'longitude', 'latitude', 'route', 'locality', 'country', 'region', 'date', 'time'];

  // public function patients(){
  //   return $this->hasMany('App\Patient','account_id', 'account_id');
  // }
}
