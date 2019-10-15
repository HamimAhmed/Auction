@extends('admin.master')

@section('css')
    @stop


       @section('content')
           <div class="app-title">
               <div>
                   <h1><i class="fa fa-th-list"></i> Category Table</h1>
                   <p>Table to display analytical data effectively</p>
               </div>
               <ul class="app-breadcrumb breadcrumb side">
                   <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                   <li class="breadcrumb-item">Tables</li>
                   <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
               </ul>
           </div>
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
                                   <th>Status</th>
                                   <th class="text-center">
                                       <a href="#" class="create-modal btn btn-success">
                                           <i class="fa fa-plus">add</i>
                                       </a>
                                   </th>
                               </tr>
                               </thead>
                               <tbody>
                               <?php $id =1; ?>
                               @foreach($categories as $category)
                               <tr class="post{{$category->id}}">
                                   <td>{{$id++}}</td>
                                   <td>{{$category->name}}</td>
                                   <td>{{$category->slug}}</td>
                                   <td>{{$category->active == 1 ? 'active' : 'inactive'}}</td>
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

           <div id="category_modal" class="modal fade" role="dialog">
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title">Add Category</h4>
                       </div>
                       <div class="modal-body">
                           <span id="form_output"></span>
                           <form action="{{route('categories.store')}}" class="form-horizontal" method="POST" id="category_form">
                               @csrf
                               <div class="form-group">
                                   <label for="name" class="custom-control-label col-sm-2"> Name</label>
                                   <div class="col-sm-10">
                                       <input type="text" placeholder="Name" id="name" class="form-control" name="name" required>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label for="slug" class="custom-control-label col-sm-2"> Slug</label>
                                   <div class="col-sm-10">
                                       <input type="text" placeholder="Name" id="slug" class="form-control" name="slug" required>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label for="status" class="custom-control-label col-sm-2"> Status</label>
                                   <div class="col-sm-10">
                                       <input type="text" placeholder="Status" id="status" class="form-control" name="status" required>
                                   </div>
                               </div>
                           </form>
                       </div>
                       <div class="modal-footer">
                           <input type="hidden" name="button_action" id="button_action" value="insert" >
                           <input type="submit" id="add" value="add" name="submit" class="btn btn-info">
                           <button class="btn btn-danger" type="button" data-dismiss="modal">
                               <span class="fa fa-remove"></span>Close
                           </button>
                       </div>
                   </div>
               </div>

           </div>
           @stop



@section('js')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>

    {{--ajax form add--}}
     


        {{--ajax form data store--}}
    @stop
