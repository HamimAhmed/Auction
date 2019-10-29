<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $guarded = [''];

    public $timestamps = false;


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function auction(){
        return $this->belongsTo(Auction::class);
    }
}
