@extends('user.master')

@section('css')
    @stop

@section('content')
    <section class="mt-5 pt-5">
        <div class="container mt-5 pt-5 mb-5">
            <div class="row">

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-info text-white text-center">
                            Auction Details

                        </div>
                        <div class="card-body">
                            <div class="mt-5 mb-5">
                                <img src="{{asset('uploads/auction_images/'.$auction->image)}}" alt="no image found" class="img-fluid">
                            </div>

                            <h3>Title : {{$auction->title}}</h3>
                            <h3> Base Price: BDT-{{$auction->price}}</h3>
                            <h3> Current Price: BDT-{{$bids[0]->bid_price}}</h3>
                            <h3> Expire Date: {{$auction->expire_date}}</h3>
                            <h3> Product Condition: {{$auction->condition}}</h3>
                            <div class="">
                                <h6>Product Description:</h6>
                                <p>{{$auction->description}}</p>
                            </div>


                        </div>

                        <div class="card-footer">

                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-info">

                        </div>
                        <div class="card-body">
                            <form action="{{}}" method="post">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="" class="text-md-center">Input Price</label>
                                    <input type="text" name="bid_price" class="form-control">
                                </div>
                                <div class="">
                                    <button class="btn-outline-info ">Place Your Bid</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @stop


@section('js')
    @stop
