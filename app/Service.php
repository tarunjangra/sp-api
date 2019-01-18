<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //

  public function entity()
  {
    return $this->belongsTo('App\Entity', 'guid', 'guid');
  }
}
