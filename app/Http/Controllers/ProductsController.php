<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Singleproduct;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function ShowSingleProduct(){
        $data=[];
        $data['categories'] = Category::select(['id','name','slug'])->get();

      //products show
        $data['products'] = Singleproduct::select(['id','title','price','quantity','expire_date','condition','image','description'])
            ->get();

        return view('user.frontend.single_product', $data);
    }

    public function ShowBusinessProduct(){
        return view('user.frontend.business_product');
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


    public function ShowSingleDetails(){
        return view('user.frontend.single_details');
    }

}
