<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function Auction(){
        return view('user.frontend.auction_product');
    }
}
