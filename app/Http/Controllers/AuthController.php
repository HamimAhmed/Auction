<?php

namespace App\Http\Controllers;


use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Validator;


class AuthController extends Controller
{
    public function ShowSellerRegistrationForm(){
        return view('user.frontend.seller_registration');
    }



    public function ProcessSellerRegistrationForm(Request $request){


        $rules = ([
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'email|required|unique:users',
            'phone_no' => 'required|min:11|max:11|unique:sellers',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
            'address1' => 'required|max:255',
            'country'  => 'required',
            'state'    =>'required',

//
        ]);
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }



//        $file = $request->file('license_file');
//        $file_name = uniqid('file_',true).Str::random(10).'.'.$file->getClientOriginalExtension();
//        if($file->isValid()) {
//            $file->storeAs('images',$file_name);
//        }

        try{
            $user=new User();


            $user->email_address=$request->email_address;
            $user->password=bcrypt($request->password);

            $user->confirm_password=bcrypt($request->password_confirmation);
            $user->role=$request->role;
            $user->save();

            $seller=new Seller(); 
            $seller->user_id=$user->id;
            $seller->first_name=$request->first_name;
            $seller->last_name=$request->last_name;
            $seller->country=$request->country;
            $seller->state=$request->state;
            $seller->address_line_1=$request->address1;
            $seller->address_line_2=$request->address2;
            $seller->phone_no=$request->phone_no;
            $seller->zip_code=$request->zip;
            $seller->save();


           session()->flash('type', 'success');
           session()->flash('message', 'Registartion done successfully');
          return redirect()->back();
        }catch(\Exception $e){
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());
           return redirect()->back();
        }

    }

    public function ShowBuyerRegistrationForm(){
        return view('user.frontend.buyer_registration');
    }


//    public function ProcessBuyerRegistrationForm(Request $request){
//
//        $rules = ([
//            'first_name' => 'required',
//            'last_name' => 'required',
//            'email_address' => 'email|required|unique:users',
//            'phone_no' => 'required|min:11|max:11|unique:commercials',
//            'password' => 'required|min:6|confirmed',
//            'password_confirmation' => 'required',
//            'address1' => 'required|max:255',
//            'country'  => 'required',
//            'state'    =>'required',
////            'license-file'  =>'required',
//
////
//        ]);
//        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);
//        if ($validator->fails()){
//            return redirect()->back()->withErrors($validator)->withInput();
//        }
//
//
//
////        $file = $request->file('license_file');
////        $file_name = uniqid('file_',true).'.'.$file->getClientOriginalExtension();
////        if($file->isValid()) {
////            $file->storeAs('uploads',$file_name);
////        }
//
//        try{
//            $user=new User();
//            $individual=new Individual();
//
//            $user->email_address=$request->email_address;
//            $user->password=bcrypt($request->password);
//
//            $user->confirm_password=bcrypt($request->password_confirmation);
//            $user->role=$request->role;
//
//            $user->save();
//
//
//            $individual->user_id=$user->id;
//            $individual->first_name=$request->first_name;
//            $individual->last_name=$request->last_name;
//            $individual->country=$request->country;
//            $individual->state=$request->state;
//            $individual->present_address=$request->address1;
//            $individual->parmanent_address=$request->address2;
//            $individual->phone_no=$request->phone_no;
//            $individual->date_of_birth=$request->date_of_birth;
//            $individual->zip_code=$request->zip;
//            $individual->save();
//
//
//            session()->flash('type', 'success');
//            session()->flash('message', 'Registartion done successfully');
//            return redirect()->back();
//        }catch(\Exception $e){
//            session()->flash('type', 'danger');
//            session()->flash('message', $e->getMessage());
//            return redirect()->back();
//        }
//
//    }
//
//    public function ShowLoginForm(){
//        return view('user.frontend.login');
//    }
}
