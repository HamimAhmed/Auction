<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commercial extends Model
{
    protected $guearded = [''];

    public $timestamps = false;


  public function user(){
     return $this->belongsTo( User::class);
  }
}
