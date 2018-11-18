@extends('layout.AdminmainLayout')
@section('title')
Admin | Library
@endsection


@section('rightcontent')
<link rel="stylesheet" href="/css/libraryview.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<span>
    <center>
        <p style="font-family: Actor;font-size: 35px;margin: 0;">Library</p>
    </center>
    <input class="form-control" style="float: right; width: 20%; margin-top: -32px;" id="myInput" type="text" placeholder="Search..">
</span>
<br />

<div class="librarybody">
    <div class="container">
        <ul style="margin: 0;float: right;padding: 0; ">
            <li>Type : Programming</li>
            <li>Total Book : 67</li>
        </ul>
        <br />


        <ul class="nav nav-tabs">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Type <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Programming</a></li>
                    <li><a href="#">Networking</a></li>
                    <li><a href="#">Physics</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('adminlibrary_add') ? 'active' : '' }}"><a href="/adminlibrary_add">Add Book</a></li>
        </ul>
    </div>


    <div class="container">
        <div class="row">


            <div class="col-md-12">
                @yield('adminlibrary_data')
                <!-- YIELDING DATA -->
            </div>
            @yield('page_number')
        </div>
    </div>
    @endsection
