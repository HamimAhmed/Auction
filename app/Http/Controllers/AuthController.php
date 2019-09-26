<?php

namespace App\Http\Controllers;

use App\Models\Commercial;
use App\Models\Individual;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;


class AuthController extends Controller
{
    public function ShowRegistrationForm(){
        return view('user.frontend.reg');
    }



    public function processRegistrationForm(Request $request){


        $rules = ([
            'f_name' => 'required',
            'l_name' => 'required',
            'company_name' => 'required|unique:commercials',
            'email_address' => 'email|required|unique:users',
            'phone_no' => 'required|min:11|max:11|unique:commercials',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
            'address1' => 'required|max:255',
            'country'  => 'required',
            'state'    =>'required',
//            'license-file'  =>'required',
            'license_no'   =>'required',
//
        ]);
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }



//        $file = $request->file('license_file');
//        $file_name = uniqid('file_',true).'.'.$file->getClientOriginalExtension();
//        if($file->isValid()) {
//            $file->storeAs('uploads',$file_name);
//        }

        try{
            $user=new User();
            $com=new Commercial();

            $user->email_address=$request->email_address;
            $user->password=bcrypt($request->password);

            $user->confirm_password=$request->password_confirmation;
            $user->role=$request->role;

            $user->save();


            $com->user_id=$user->id;
            $com->first_name=$request->f_name;
            $com->last_name=$request->f_name;
            $com->country=$request->country;
            $com->state=$request->state;
            $com->address_line_1=$request->address1;
            $com->address_line_2=$request->address2;
            $com->phone_no=$request->phone_no;
            $com->company_name=$request->company_name;
            //$com->license_paper=$request->license-file;
            $com->license_no=$request->license_no;
            $com->zip_code=$request->zip;
            $com->save();


           session()->flash('type', 'success');
           session()->flash('message', 'Registartion done successfully');
          return redirect()->back();
        }catch(\Exception $e){
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());
           return redirect()->back();
        }

    }

    public function ShowIndividualRegForm(){
        return view('user.frontend.individual');
    }


    public function ProcessIndividualRegForm(Request $request){

        $rules = ([
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'email|required|unique:users',
            'phone_no' => 'required|min:11|max:11|unique:commercials',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
            'address1' => 'required|max:255',
            'country'  => 'required',
            'state'    =>'required',
//            'license-file'  =>'required',

//
        ]);
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }



//        $file = $request->file('license_file');
//        $file_name = uniqid('file_',true).'.'.$file->getClientOriginalExtension();
//        if($file->isValid()) {
//            $file->storeAs('uploads',$file_name);
//        }

        try{
            $user=new User();
            $individual=new Individual();

            $user->email_address=$request->email_address;
            $user->password=bcrypt($request->password);

            $user->confirm_password=bcrypt($request->password_confirmation);
            $user->role=$request->role;

            $user->save();


            $individual->user_id=$user->id;
            $individual->first_name=$request->first_name;
            $individual->last_name=$request->last_name;
            $individual->country=$request->country;
            $individual->state=$request->state;
            $individual->present_address=$request->address1;
            $individual->parmanent_address=$request->address2;
            $individual->phone_no=$request->phone_no;
            $individual->date_of_birth=$request->date_of_birth;
            $individual->zip_code=$request->zip;
            $individual->save();


            session()->flash('type', 'success');
            session()->flash('message', 'Registartion done successfully');
            return redirect()->back();
        }catch(\Exception $e){
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());
            return redirect()->back();
        }

    }

    public function ShowLoginForm(){
        return view('user.frontend.login');
    }
}
