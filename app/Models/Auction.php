<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $guarded = [''];

    public $timestamps = false;

    public function Singleproduct(){
        return $this->hasOne(Singleproduct::class);
    }
    public function Businessproduct(){
        return $this->hasOne(Businessproduct::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public  function category(){

        return $this->belongsTo(Category::class);
    }

}
