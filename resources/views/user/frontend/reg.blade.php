@extends('user.master')
@section('title')
    registration
    @stop

@section('content')

    <div class="container">
        <div class="col-md-12 mx-auto pt-5">
            <div class="card col-lg-10 col-md-6 col-sm-12 mx-auto my-5">
                <div class="card-header bg-info">

                      </div>
                  <div class="card-body">
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="">Register as a Business Account</h3>
                            <a href="{{route('individual_reg_form')}}"> create your individual account please click here</a>

                            {{--validation --}}


                            {{--modal--}}

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

                           {{--end modal--}}

                            <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">First Name *</label>
                                        <input type="text" name="f_name" class="form-control" value="{{old('f_name')}}" id="first_name" placeholder="Your First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Last Name *</label>
                                        <input type="text" name="l_name" class="form-control" value="{{old('l_name')}}" id="last_name" placeholder="Your Last Name">
                                    </div>
                                </div>
                                <div class="form-row mb-5">
                                    <div class="form-group col-md-6">
                                        <label for="username">Email Address *</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="email" name="email_address" value="{{old('email_address')}}" class="form-control" id="username" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{--<label for="username"> Confirm Email Address</label>--}}
                                        {{--<div class="input-group">--}}
                                            {{--<div class="input-group-prepend">--}}
                                                {{--<span class="input-group-text">@</span>--}}
                                            {{--</div>--}}
                                            {{--<input type="text" name="secondary_email" class="form-control" id="username" placeholder="Email Address" required>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comp">Company Name *</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">?</span>
                                        </div>
                                        <input type="text" value="{{old('company_name')}}" name="company_name" class="form-control" id="comp" placeholder="Company Name">
                                        <small id="comp" class="form-text text-muted mb-5">
                                            If you are registering as a business, enter your company name here. Company name must match your applicable business licenses and will appear on vehicle titles exactly as entered.
                                        </small>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlTextarea1">Address Line 1 *</label>
                                        <textarea class="form-control" name="address1" id="exampleFormControlTextarea1" rows="2">{{old('address1')}}</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlTextarea1">Address Line 2</label>
                                        <textarea class="form-control" name="address2" id="exampleFormControlTextarea1" rows="2">{{old('address2')}}</textarea>
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
                                            <option>Chittagong</option>
                                            <option>Rajshahee</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">

                                            <label for="username">Phone Number</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">+880</span>
                                                </div>
                                                <input type="number" name="phone_no" minlength="11"maxlength="11" value="{{old('phone_no')}}" class="form-control" id="username" placeholder="Phone No" >
                                            </div>

                                    </div>
                                        <div class="form-group col-md-6">
                                            <label for="last_name">Zip or Postal Code</label>
                                            <input type="text" name="zip" value="{{old('zip')}}" class="form-control" id="last_name" placeholder="Zip or Postal Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mt-5 mb-5 bg-light">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Input Your Companies Business License</label>
                                    <input type="file" name="license-file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                    <div class="form-group col-md-6">
                                        <label for="license">Business License No</label>
                                        <input type="text" name="license_no" value="{{old('license_no')}}" class="form-control" placeholder="Business License No" id="license">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">Password *</label>
                                        <input type="password" name="password" class="form-control" id="first_name" placeholder="Your First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Confirm Password *</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="last_name" placeholder="Your Last Name">
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="hidden" name="role" class="form-control" value="commercial">
                                </div>

                                <div class="form-group form-check mb-5">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">By clicking this box I agrre that I am 18 years of age and and I have read and agree all terms and condition </label>
                                </div>
                                <input type="submit" class="btn btn-info btn-block btn-md-6"  value="Register"/>
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


@endsection
