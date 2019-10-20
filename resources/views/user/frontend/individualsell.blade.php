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
                   <div class="card-header">
                       <h3 class="">Auction Form</h3>
                   </div>
                   <div class="card-body">
                       <form class="form-horizontal">
                           <div class="form-group row">
                               <label class="control-label col-md-3">Name</label>
                               <div class="col-md-8">
                                   <input class="form-control" type="text" placeholder="Enter full name">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Email</label>
                               <div class="col-md-8">
                                   <input class="form-control col-md-8" type="email" placeholder="Enter email address">
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Address</label>
                               <div class="col-md-8">
                                   <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Gender</label>
                               <div class="col-md-9">
                                   <div class="form-check">
                                       <label class="form-check-label">
                                           <input class="form-check-input" type="radio" name="gender">Male
                                       </label>
                                   </div>
                                   <div class="form-check">
                                       <label class="form-check-label">
                                           <input class="form-check-input" type="radio" name="gender">Female
                                       </label>
                                   </div>
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="control-label col-md-3">Identity Proof</label>
                               <div class="col-md-8">
                                   <input class="form-control" type="file">
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
                           <div class="col-md-8 col-md-offset-3">
                               <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
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


