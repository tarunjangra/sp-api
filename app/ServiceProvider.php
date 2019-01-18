<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{

  public function entity()
  {
    return $this->belongsTo('App\Entity', 'guid', 'guid');
  }
}
