@extends('admin.master')

@section('css')
    @stop


       @section('content')
           <div class="app-title">
               {{--form--}}


               {{----}}
               <div class="">
                   <h1><i class="fa fa-th-list"></i> Category Table</h1>
                   <p>Table to display analytical data effectively</p>
               </div>
               <ul class="app-breadcrumb breadcrumb side">
                   <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                   <li class="breadcrumb-item">Tables</li>
                   <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
               </ul>
           </div>

           {{--test--}}
           {{--<form action="{{route('categories.store')}}" method="post">--}}

               {{--@csrf--}}
               {{--@if ($errors->any())--}}
                   {{--<div class="alert alert-danger">--}}
                       {{--<ul>--}}
                           {{--@foreach ($errors->all() as $error)--}}
                               {{--<li>{{ $error }}</li>--}}
                           {{--@endforeach--}}
                       {{--</ul>--}}
                   {{--</div>--}}
               {{--@endif--}}

               {{--@if (session()->has('message'))--}}
                   {{--<div class="alert alert-{{session('type')}}">--}}
                       {{--{{session('message')}}--}}
                   {{--</div>--}}
               {{--@endif--}}
               {{--<input type="text" name="category_name" placeholder="name">--}}
               {{--<button type="submit" class="btn btn-success btn-lg">Submit</button>--}}

           {{--</form>--}}
           {{----}}

           {{--form--}}
           <div class="clearix"></div>
           <div class="col-md-12">
               <div class="tile">
                   <h3 class="tile-title">Add Product Category</h3>
                   <div class="tile-body">
                       <form class="row" action="{{route('categories.store')}}"  method="post">
                           @csrf
                           {{--@if ($errors->any())--}}
                               {{--<div class="alert alert-danger">--}}
                                   {{--<ul>--}}
                                       {{--@foreach ($errors->all() as $error)--}}
                                           {{--<li>{{ $error }}</li>--}}
                                       {{--@endforeach--}}
                                   {{--</ul>--}}
                               {{--</div>--}}
                           {{--@endif--}}

                           {{--@if (session()->has('message'))--}}
                               {{--<div class="alert alert-{{session('type')}}">--}}
                                   {{--{{session('message')}}--}}
                               {{--</div>--}}
                           {{--@endif--}}
                           <div class="form-group col-md-3">
                               <label class="control-label"> Category Name</label>
                               <input class="form-control" type="text" name="category_name" id="category_name" placeholder="Enter category name">
                           </div>
                           <div class="form-group col-md-4 align-self-end">
                               <button class="btn btn-primary" type="submit" id="cat"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>

           {{--align-self-end--}}
           <div class="row">
               <div class="col-md-12">
                   <div class="tile">
                       <div class="tile-body">
                           <table class="table table-hover table-bordered" id="sampleTable">
                               <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Slug_Name</th>
                                   <th> Action
                                   </th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($categories as $category)
                               <tr class="">
                                   <td>{{$category->id}}</td>
                                   <td>{{$category->name}}</td>
                                   <td>{{$category->slug}}</td>
                                   <td>
                                       <a href="" class="show-modal btn btn-info">
                                           <i class="fa fa-eye"></i>
                                       </a>
                                       <a href="" class="edit-modal btn btn-warning">
                                           <i class="fa fa-edit"></i>
                                       </a>
                                       <a href="" class="delete-modal btn btn-danger">
                                           <i class="fa fa-remove"></i>
                                       </a>
                                   </td>
                               </tr>
                                   @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
           @stop



@section('js')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    java script for sweat alert

    <script type="text/javascript">
        $("#cat").click(function(){
           var category_name = $("#category_name").val();
           if(category_name === ''){
               swal({
                   title: "Fields Empty",
                   text: "Plz Fill Up The Missing Fields!",
                   icon: "warning",
               });
           }else{
               swal("Good job!", "You clicked the button!", "success", {

               });
           }
        });

    </script>


    @stop
