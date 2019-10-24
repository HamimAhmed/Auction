@extends('user.master')

@section('css')
    @stop

@section('content')
    <section class="mt-5 pt-5">
        <div class="container mt-5 pt-5 mb-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <img src="img/clients/client-3" alt="no image found" class="img-fluid">
                        </div>

                        <div class="card-footer">

                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group mb-2">
                                    <label for="" class="text-md-center">Input Price</label>
                                    <input type="text" name="bid_price" class="form-control">
                                </div>
                                <div class="">
                                    <button class="btn-outline-info ">Submit Your Bid</button>
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
