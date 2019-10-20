<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuctionController extends Controller
{

    public function ShowIndividualForm(){
        return view('user.frontend.individualsell');
    }

    public function ProcessIndividualForm( Request $request){

    }


     public  function ShowBusinessForm(){
        return view('user.frontend.businessell');
     }


     public  function ProcessBusinessForm(Request $request){

     }
}
