<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Businessproduct extends Model
{
    protected $guarded = [''];

    public $timestamps = false;


    public function auction(){
        return $this->belongsTo(Auction::class);
    }
}
