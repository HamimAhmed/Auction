<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function ShowAllProducts()
    {
        $data = [''];
        $data['auctions'] = Auction::with('user', 'category')
            ->select('id', 'user_id', 'expire_date', 'created_at', 'is_approve', 'type', 'category_id')
            ->get();
        return view('admin.dashboard.products', $data);


    }

    public function PendingProducts()
    {
        $data = [];
        $data['auctions'] = Auction::where('is_approve', 0)->get();
        return view('admin.dashboard.pendingpost', $data);

    }
    public function ViewProducts($id){
        $data = [''];
        $data['auction'] = Auction::with('user','category')
           ->select('id','user_id','created_at','expire_date','category_id')
                 ->where('id',$id)
            ->first();

        return view('admin.dashboard.viewproducts',$data);
    }

    public function ApproveProducts($id)
    {
        $auction = Auction::find($id);

        if ($auction->is_approve == false) {
            $auction->is_approve = true;
            $auction->save();

            session()->flash('type', 'success');
            session()->flash('message', 'This Post approved succesfully');
            return redirect()->back();
        } else {
            session()->flash('type', 'danger');
            session()->flash('message', 'This Post has already been approved');
            return redirect()->back();
        }

    }
    }
