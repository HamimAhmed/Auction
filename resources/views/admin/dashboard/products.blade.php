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

    {{--align-self-end--}}
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Created_At</th>
                            <th>Expire_Date</th>
                            <th>Is_Approve</th>
                            <th> Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($auctions as $auction)
                            <tr class="">
                                <td>{{$auction->id}}</td>
                                <td>{{$auction->user->seller->first_name}}</td>
                                <td>{{$auction->type}}</td>
                                <td>{{$auction->category->name}}</td>
                                <td>{{$auction->created_at}}</td>
                                <td>{{$auction->expire_date}}</td>
                                <td>{{$auction->is_approve == 1 ? 'approved':'pending'}}</td>


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


    </script>


@stop
