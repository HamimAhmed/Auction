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
                    <div class="single category">
                        <h3 class="side-title">Category</h3>
                        <ul class="list-unstyled">
                            <li><a href="" title="">Business <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Technology <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Transport <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Gadgets <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Automobiles <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Android <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">IOS <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Windows <span class="pull-right">13</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 mt-5">
                    <div class="card mb-3">
                        <div class="card-body mb-3">
                            <div class="clearfix">
                                <div class="float-left w-25">
                                    <img src="img/portfolio/app1.jpg" class="img-fluid border-3" alt="not found">
                                </div>
                                <div class="float-right w-75 pl-3">
                                    <a href=""><h3>Alias doloribus labore nam necessitatibus voluptas.</h3></a>
                                    <h6>Brand New</h6>
                                    <h4>current price: $89</h4>
                                    <div class="clearfix">
                                        <h6 class="float-left">9 bids</h6>
                                        <span class="float-right">2-3 business days delivery</span>
                                    </div>
                                    <p> Alias doloribus labore nam necessitatibus voluptas.</p>
                                    <a href="" class="btn btn-info">More Details</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-muted">
                            3 days 10 hour to finish
                        </div>
                    </div>



                    {{----}}
                    <div class="card">
                        <div class="card-body mb-3">
                            <div class="clearfix">
                                <div class="float-left w-25">
                                    <img src="img/portfolio/app1.jpg" class="img-fluid border-3" alt="not found">
                                </div>
                                <div class="float-right w-75 pl-3">
                                    <a href=""><h3>Alias doloribus labore nam necessitatibus voluptas.</h3></a>
                                    <h6>Brand New</h6>
                                    <h4>current price: $89</h4>
                                    <div class="clearfix">
                                        <h6 class="float-left">9 bids</h6>
                                        <span class="float-right">2-3 business days delivery</span>
                                    </div>
                                    <p> Alias doloribus labore nam necessitatibus voluptas.</p>
                                    <a href="" class="btn btn-info">More Details</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-muted">
                            3 days 10 hour to finish
                        </div>
                    </div>
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
