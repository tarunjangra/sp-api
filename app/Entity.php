<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
  protected $primaryKey = 'guid';

  public static function boot()
  {
    parent::boot(); // TODO: Change the autogenerated stub

    static::created(function ($entity) {

    });
  }

  public function service()
  {
    return $this->hasOne('App\Service', 'guid', 'guid');
  }
}
