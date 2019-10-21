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
                       <form class="form-horizontal">
                           <div class="form-group row">
                               <label class="control-label col-md-3">Auction Title</label>
                               <div class="col-md-8">
                                   <input class="form-control" type="text" name="title" placeholder="Enter Auction Title">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Email</label>
                               <div class="col-md-8">
                                   <input class="form-control col-md-8" type="email" name="email" placeholder="Enter email address">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Description</label>
                               <div class="col-md-8">
                                   <textarea class="form-control" rows="4" placeholder="Enter your address" name="description"></textarea>
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Type</label>
                               <div class="col-md-9">
                                   <div class="form-check">
                                       <label class="form-check-label">
                                           <input class="form-check-input" type="radio" name="type">Old
                                       </label>
                                   </div>
                                   <div class="form-check">
                                       <label class="form-check-label">
                                           <input class="form-check-input" type="radio" name="type">New
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
                                   <input class="form-control" type="text" name="price" placeholder="Enter Product Quantity">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3"> Duration</label>
                               <div class="col-md-8">
                                   <input class="form-control" type="datetime-local" name="duration" placeholder="Enter Auction Duration">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Product Image</label>
                               <div class="col-md-8">
                                   <input class="form-control" type="file" name="image">
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
                       </form>
                   </div>
                   <div class="card-footer">
                       <div class="row">
                           <div class="col-md-8 col-md-offset-5">
                               <button class="btn btn-info" type="button">
                                   <i class="fa fa-fw fa-lg fa-check-circle"></i>Submit
                               </button>&nbsp;
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
@stop

@section('jss')
@stop


