@extends('admin.master')
@section('css')
@stop

@section('content')

    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Make Approval</h1>
            <p>Start</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Approve Page</a></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-md-8">
            <div class="tile">
                <div class="tile-body text-info">
                    @if(session()->has('message'))
                        <div class="alert alert-{{session('type')}}">
                            {{session('message')}}

                        </div>
                    @endif
                </div>
            </div>

        </div>


        <div class="col-md-8">

            <div class="tile">
                <h4>Auction_id:{{$auction->id}}</h4>
                <h4>Auction category: {{$auction->category->name}}</h4>
                <h4>User Name: {{$auction->user->seller->first_name}}</h4>

                {{--<div>--}}
                {{--<button class="btn btn-info">Approve</button>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="col-md-4">
            @if($auction->is_approve == false)

                <form action="{{route('approve.products',$auction->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <button class="btn-group-lg btn-success" type="submit">
                        Approve
                    </button>
                </form>
            @else
                <button class="btn-group-lg btn-Danger" type="submit" disabled="">
                    Approved
                </button>
            @endif

        </div>
    </div>
@stop



@section('js')
@stop
