<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
  protected $primaryKey = 'guid';

  public function user()
  {
    return $this->hasOne('App\User', 'guid', 'guid');
  }

  public function service()
  {
    return $this->hasOne('App\Service', 'guid', 'guid');
  }

  public function serviceProvide()
  {
    return $this->hasOne('App\ServiceProvide', 'guid', 'guid');
  }
}
