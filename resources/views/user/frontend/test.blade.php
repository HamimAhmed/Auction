@extends('admin.master')

@section('content')
    <form action="{{route('test.store')}}" method="post">

        @csrf
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
        <input type="text" name="category_name" placeholder="name">
        <button type="submit" class="btn btn-success btn-lg"></button>

    </form>
    @stop
