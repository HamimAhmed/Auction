@extends('user.master')

@section('content')

    <div class="container">
        <div class="col-md-12 mx-auto pt-5">
            <div class="card col-lg-10 col-md-6 col-sm-12 mx-auto my-5">
                <div class="card-header bg-info">

                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="mb-5">Register as a Individual Account</h3>

                            {{--validation --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session()->has('message'))
                                <div class="alert alert-{{session('type')}}">
                                    {{session('message')}}
                                </div>
                            @endif

                            <form action="{{route('individual_reg_form')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">First Name *</label>
                                        <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Your First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Last Name *</label>
                                        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Your Last Name">
                                    </div>
                                </div>
                                <div class="form-row mb-5">
                                    <div class="form-group col-md-6">
                                        <label for="username">Email Address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="email" name="email_address" class="form-control" id="username" placeholder="Email Address" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="username"> Phone No</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" name="phone_no" class="form-control" id="username" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="last_name"></label>
                                    <input type="hidden" name="role" class="form-control" id="last_name" placeholder=""value="individual">
                                </div>
                                <div class="form-group">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlTextarea1">Address Line 1 *</label>
                                            <textarea class="form-control" name="address1" id="exampleFormControlTextarea1" rows="2"></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlTextarea1">Address Line 2</label>
                                            <textarea class="form-control" name="address2" id="exampleFormControlTextarea1" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <select class="form-control" name="country">
                                                <option class="hidden" selected disabled>Select Country
                                                </option>
                                                <option value="bangladesh">Bangladesh</option>
                                                <option>......</option>
                                                <option>......</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <select class="form-control" name="state">
                                                <option class="hidden" selected disabled>Select Your State
                                                </option>
                                                <option value="dhaka">Dhaka</option>
                                                <option value="chittagong">Chittagong</option>
                                                <option value="rajshahee">Rajshahee</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">

                                            <label for="username">Date Of Birth</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"></span>
                                                </div>
                                                <input type="date" name="date_of_birth" class="form-control" id="username" placeholder="">
                                            </div>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="last_name">Zip or Postal Code</label>
                                            <input type="text" name="zip" class="form-control" id="last_name" placeholder="Zip or Postal Code">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">Password *</label>
                                        <input type="text" name="password" class="form-control" id="first_name" placeholder="Your First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Confirm Password *</label>
                                        <input type="text" name="password_confirmation" class="form-control" id="last_name" placeholder="Your Last Name">
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="hidden" name="role" class="form-control" value="individual">
                                </div>

                                <div class="form-group form-check mb-5">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">By clicking this box I agrre that I am 18 years of age and and I have read and agree all terms and condition </label>
                                </div>
                                <input type="submit" class="btn btn-info btn-block btn-md-6" value="Register"/>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <p>Already have an account?<a class="reg" href="login.html">Login</a>
        </p>
    </div>
    </div>
    @stop
