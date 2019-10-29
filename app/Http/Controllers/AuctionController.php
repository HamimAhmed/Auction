<?php

namespace App\Http\Controllers;

use App\Events\AuctionCreated;
use App\Models\Auction;
use App\Models\Bid;
use App\Models\Businessproduct;
use App\Models\Category;
use App\Models\Singleproduct;
use App\Models\User;
use App\Notifications\NotifyBuyers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class AuctionController extends Controller
{

    public function ShowAuctionForm()
    {
        $data = [];
        $data['categories'] = Category::select('id', 'name')->get();
        return view('user.frontend.auctionsell', $data);
    }

    public function ProcessAuctionForm(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:auctions|max:255',
            'quantity' => 'required',
            'company_name' => 'required',
            'price' => 'required',
            'condition' => 'required',
            'image' => 'required|image|mimes:jpeg,bmp,png',
            'description' => 'required',
            'expire_date' => 'required|date'
        ]);


        $file = $request->file('image');
        $file_name = uniqid('image_', true) . Str::random(10) . '.' . $file->getClientOriginalExtension();
//        dd($file_name);
        if ($file->isValid()) {
            $file->storeAs('auction_images', $file_name);
        }

       // try {
        $auction = new Auction();
        $auction->user_id = auth()->user()->id;
        $auction->email = $request->email;
        $auction->company_name = $request->company_name;
        $auction->category_id = $request->category;
        $auction->expire_date = $request->expire_date;
        $auction->title = $request->title;
        $auction->quantity = $request->quantity;
        $auction->condition = $request->condition;
        $auction->description = $request->description;
        $auction->image = $file_name;
        $auction->price = $request->price;
        $auction->save();



            $bid = new Bid();
            $bid->auction_id = $auction->id;
            $bid->user_id = auth()->user()->id;
            $bid->bid_price = $auction->price;
            $bid->save();


            $users = User::where('role','buyer')->get();

            Notification::send($users,new NotifyBuyers($auction));

            $auction = Auction::with('user')->find($auction->id);
            event(new AuctionCreated($auction));

            session()->flash('type', 'success');
            session()->flash('message', 'Uploads successfully');
            return redirect()->back();


       // } catch (\Exception $e) {
           // session()->flash('type', 'danger');
           // session()->flash('message', 'Uploads failed');
           // return redirect()->back();

        //}
    }


    public function PlaceBids(Request $request){
        $request->validate = ([
            'bid_price'=>'required|numeric|min:1',
            'auction_id' => 'required',
        ]);


    }



}

