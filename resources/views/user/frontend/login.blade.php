@extends('user.master')

@section('title')
    Login-Form
    @stop

@section('css')
    <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}">
@stop

@section('content')

    <div class="wrapper fadeInDown pt-5 mt-5">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first mt-3">
                <img src="img/login.jpg" id="icon" alt="User Icon" />
            </div>
            <div class="mt-3 mb-3">
                <h5 class="text-white">Login your Account</h5>
            </div>

            <!-- Login Form -->
            <form method="post" action="{{route('login')}}">

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                @if(session()->has('message'))
                    <div class="alert alert-{{session('type')}}">
                        {{session('message')}}

                    </div>
                    @endif

                @csrf
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email Address">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth btn btn-danger" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password</a>
            </div>

        </div>
    </div>
    @stop

@section('js')
    <script src="{{asset('frontend/lib/jquery/jquery-1.11.1.min.js')}}"></script>
@stop
