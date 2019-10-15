<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $guarded =[];

    public $timestamps = false;

    public function buyer(){
        return $this->belongsTo(User::class );
    }
}
