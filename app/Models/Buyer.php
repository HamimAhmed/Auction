<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $guarded =[];
    public $timestamps = false;

     public  function seller(){
         return $this->belongsTo(User::class);
     }
}
