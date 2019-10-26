<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $guarded = [''];

    public $timestamps = true;

    public function singleproduct(){
        return $this->hasOne(Singleproduct::class);
    }
    public function businessproduct(){
        return $this->hasOne(Businessproduct::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public  function category(){

        return $this->belongsTo(Category::class);
    }

}
