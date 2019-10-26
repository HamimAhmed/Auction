@extends('user.master')

@section('css')
    @stop

@section('content')
   <section class="mt-5 pt-5 mb-5">
       <div class="pt-5 pb-5">
           <ul class="app-breadcrumb breadcrumb pt-5 pb-5">
               <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
               <li class="breadcrumb-item">Auction</li>
               <li class="breadcrumb-item"><a href="#">Auction Products Forms</a></li>
           </ul>
       </div>
       <div class="row col-md-12 px-5">
           <div class="col-md-4">
               <div class="card">
                   <div class="card-header bg-info">
                       <h4 class="tile-title text-white">Terms And Condition</h4>
                   </div>
                   <div class="card-body">
                   </div>
                   <div class="card-footer">

                   </div>
               </div>
           </div>
           <div class="col-md-6">
               <div class="card">
                   <div class="card-header bg-info">
                       <h3 class="text-white">Auction Form</h3>
                   </div>
                   <div class="card-body">

                       <form class="form-horizontal" method="post" action="{{route('single.auction')}}" enctype="multipart/form-data">
                       @csrf
                           @if(count($errors) > 0)
                               <div class="alert alert-danger">
                                   <ul>
                                       @foreach($errors->all() as $error)
                                           <li>{{$error}}</li>
                                       @endforeach
                                   </ul>
                               </div>
                           @endif

                           @if(session()->has('message'))
                               <div class="alert alert-{{session('type')}}">
                                   {{session('message')}}

                               </div>
                           @endif
                           <div class="form-group row">
                               <label class="control-label col-md-3">Auction Title</label>
                               <div class="col-md-8">
                                   <input class="form-control" type="text" name="title" placeholder="Enter Auction Title">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Email Address</label>
                               <div class="col-md-8">
                                   <input class="form-control col-md-8" value="{{auth()->user()->email}}" type="email" name="email" readonly>
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Description</label>
                               <div class="col-md-8">
                                   <textarea class="form-control" rows="4" placeholder="Make your Products Details" name="description"></textarea>
                               </div>
                           </div>
                           <div class="form-group row">
                               <label for="exampleFormControlSelect1">Select Category</label>
                               <select class="form-control" id="exampleFormControlSelect1" name="category">
                                   @foreach($categories as $category)
                                       <option value="{{ $category->id }}" > {{ $category->name }}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Condition</label>
                               <div class="col-md-9">
                                   <div class="form-check">
                                       <label class="form-check-label">
                                           <input class="form-check-input" value="old" type="radio" name="condition">Old
                                       </label>
                                   </div>
                                   <div class="form-check">
                                       <label class="form-check-label">
                                           <input class="form-check-input" value="new" type="radio" name="condition">New
                                       </label>
                                   </div>
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Base Price</label>
                               <div class="col-md-8">
                                   <input class="form-control" type="text" name="price" placeholder="Enter Base Price">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Quantity</label>
                               <div class="col-md-8">
                                   <input class="form-control" type="text" name="quantity" placeholder="Enter Product Quantity">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3"> Duration</label>
                               <div class="col-md-8">
                                   <input class="form-control" type="datetime-local" name="expire_date" placeholder="Enter Auction Duration">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3"></label>
                               <div class="col-md-8">
                                   <input class="form-control" type="hidden" name="type" value="single">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Product Image</label>
                               <div class="col-md-8">
                                   <input class="form-control" type="file" name="image" >
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-8 col-md-offset-3">
                                   <div class="form-check">
                                       <label class="form-check-label">
                                           <input class="form-check-input" type="checkbox">I accept the terms and conditions
                                       </label>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-8 col-md-offset-5">
                                   <input type="submit" value="Submit" class="btn btn-outline-info">
                               </div>
                           </div>
                       </form>

                   </div>
                   <div class="card-footer">

                   </div>
               </div>
           </div>
       </div>
   </section>
@stop

@section('jss')
@stop


