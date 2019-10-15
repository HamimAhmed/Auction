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
            <div class="fadeIn first">
                <img src="img/login.jpg" id="icon" alt="User Icon" />
                <h1>Login Here</h1>
            </div>

            <!-- Login Form -->
            <form>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Go For Registration</a>
            </div>

        </div>
    </div>
    @stop

@section('js')
    <script src="{{asset('frontend/lib/jquery/jquery-1.11.1.min.js')}}"></script>
@stop
