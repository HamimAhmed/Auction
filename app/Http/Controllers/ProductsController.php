<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function ShowAuction()
    {
        $data = [];
        $data['categories'] = Category::select(['id', 'name', 'slug'])->get();

        //products show
        $data['auctions'] = Auction::with(['user','category'])
            ->where('expire_date','>', Date('y-m-d'))
            ->get();

        return view('user.frontend.auctions', $data);
    }



//    public function ShowCategoryList($slug){
//        $data=[];
//
//       $data['categories']= Category::select(['id','name'])->where('slug', $slug)->get();
//
//
//        return view('user.partials.category',$data);
//
//
//    }


    public function ShowAuctionDetails($id)
    {
        $data = [''];

//        $data['bids'] = Bid::with('auction','user')
//            ->where('auction_id',$id)
//          ->get();


        $data['auction'] = Auction::with('user')->find($id);
        $data['bids'] = $data['auction']->bids;
        return view('user.frontend.auction_details', $data);
    }

}
