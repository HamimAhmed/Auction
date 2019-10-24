@extends('user.master')

@section('title')
    Auction_Product
@stop

@section('css')
    <style>
        .col {
            height: auto;
        }


        /**/
        .single {
            padding: 30px 15px;
            margin-top: 40px;
            background: #fcfcfc;
            border: 1px solid #f0f0f0;
        }

        .single h3.side-title {
            margin: 0;
            margin-bottom: 10px;
            padding: 0;
            font-size: 20px;
            color: #333;
            text-transform: uppercase;
        }

        .single h3.side-title:after {
            content: '';
            width: 60px;
            height: 1px;
            background: #ff173c;
            display: block;
            margin-top: 6px;
        }

        .single ul {
            margin-bottom: 0;
        }

        .single li a {
            color: #666;
            font-size: 14px;
            text-transform: uppercase;
            border-bottom: 1px solid #f0f0f0;
            line-height: 40px;
            display: block;
            text-decoration: none;
        }

        .single li a:hover {
            color: #ff173c;
        }

        .single li:last-child a {
            border-bottom: 0;
        }
    </style>
@stop


@section('content')

    <section>
        <div class="container mb-5 mt-5 pt-5">
            <div class="row">
                <div class="col text-md-center">
                    <!-- Category -->
                    @include('user.partials.category')
                </div>
                <div class="col-6 mt-5">

                    @foreach($products as $product)

                    <div class="card mb-3">

                        <div class="card-body mb-3">

                            <div class="clearfix">
                                <div class="float-left w-25">
                                    <img src="{{asset('uploads/auction_images/'.$product->image) }}" class="img-fluid border-3" alt="not found">
                                </div>
                                <div class="float-right w-75 pl-3">
                                    <a href="{{route('single.details',$product->id)}}"><h3>{{$product->title}}</h3></a>
                                    <h6>{{$product->condition}}</h6>
                                    <h4>current price: {{$product->price}}</h4>
                                    <div class="clearfix">
                                        <h6 class="float-left">9 bids</h6>
                                        <span class="float-right">2-3 business days delivery</span>
                                    </div>
                                    <p>{{$product->description}}</p>
                                    <a href="" class="btn btn-info">More Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-muted">
                            {{$product->expire_date}}
                        </div>
                    </div>

                           @endforeach

                    {{----}}

                </div>

                <div class="col bg-light mt-5">
                    <div class="card">
                        <div class="card-header">
                            Search Item
                        </div>
                        <div class="card-body">
                            <form class=" my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                       aria-label="Search"><br>

                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>

                        <div class="card-body">
                            <h4>Search by Price</h4>
                            <form action="">
                                <div class="form-row">
                                    <div class="col-auto">
                                        <input type="search" class="form-control" placeholder="from"
                                               aria-label="search">
                                    </div>
                                </div>
                                <div class="form-row mt-2 mb-2">
                                    <div class="col-auto">
                                        <input type="search" class="form-control" placeholder="To" aria-label="search">
                                    </div>
                                </div>
                                <button class="btn btn-md btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>

                        <div class="card-body">
                            <h4> Search Location</h4>
                            <form action="">
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=" col-4">
                                    <button class="form-row btn btn-sm btn-outline-success" type="submit">Search
                                    </button>
                                </div>
                            </form>

                        </div>

                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@stop

@section('js')

@stop
