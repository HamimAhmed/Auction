<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Businessproduct;
use App\Models\Category;
use App\Models\Singleproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuctionController extends Controller
{

    public function ShowIndividualForm()
    {
        $data = [];
        $data['categories'] = Category::select('id', 'name')->get();
        return view('user.frontend.singlesell', $data);
    }

    public function ProcessIndividualForm(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:singleproducts|max:255',
            'quantity' => 'required',
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

        try {
            $auction = new Auction();
            $auction->user_id = auth()->user()->id;
            $auction->email = $request->email;
            $auction->type = $request->type;
            $auction->category_id = $request->category;
            $auction->save();

            $single = new Singleproduct();
            $single->auction_id = $auction->id;
            $single->title = $request->title;
            $single->quantity = $request->quantity;
            $single->condition = $request->condition;
            $single->description = $request->description;
            $single->image = $file_name;
            $single->price = $request->price;
            $single->expire_date = $request->expire_date;
            $single->save();

            session()->flash('type', 'success');
            session()->flash('message', 'Uploads successfully');
            return redirect()->back();


        } catch (\Exception $e) {
            session()->flash('type', 'danger');
            session()->flash('message', 'Uploads failed');
            return redirect()->back();

        }
    }


    public function ShowBusinessForm()
    {
        $data = [];
        $data['categories'] = Category::select('id', 'name')->get();

        return view('user.frontend.businessell', $data);
    }


    public function ProcessBusinessForm(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:singleproducts|max:255',
            'company_name' => 'required',
            'quantity' => 'required',
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
            $auction->type = $request->type;
            $auction->category_id = $request->category;
            $auction->save();

            $bus = new Businessproduct();

            $bus->auction_id = $auction->id;
            $bus->title = $request->title;
            $bus->company_name = $request->company_name;
            $bus->quantity = $request->quantity;
            $bus->condition = $request->condition;
            $bus->description = $request->description;
            $bus->image = $file_name;
            $bus->price = $request->price;
            $bus->expire_date = $request->expire_date;
            $bus->save();

            session()->flash('type', 'success');
            session()->flash('message', 'Uploads successfully');
            return redirect()->back();


       // } catch (\Exception $e) {
         //   session()->flash('type', 'danger');
          //  session()->flash('message', 'Uploads failed');
          // return redirect()->back();

        //}

    }


}

