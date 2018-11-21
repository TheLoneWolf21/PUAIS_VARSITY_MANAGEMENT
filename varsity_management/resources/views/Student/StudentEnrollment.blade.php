@extends('layout.AdminmainLayout')
@section('title')
Student | Enrollment
@endsection
@section('rightcontent')
<!-- <link rel="stylesheet" href="/css/studentview.css"> -->
<link rel="stylesheet" href="/css/studentenroll.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<center>
    <p style="font-family: Actor;font-size: 35px;margin: 0;">Enrollment</p>
</center>

<div class="stuenrollbody">
    <div class="container">
        <h3 style="margin: 0;float: left; font-family: Glyph;font-size: 30px; margin-left: 5px;"><i><img src="#"></i>&nbsp;<strong>Abdul Hakim</strong></h3>
        <ul style="margin: 0;float: right; ">
            <li>Pending: 5</li>
            <li>Approved: 2</li>
            <li>Declined: 2</li>
        </ul>
        <br />
        <br />
        <ul class="nav nav-tabs">
            <li class="{{ Request::is('stuenroll') ? 'active' : '' }}"><a href="/stuenroll">Enroll</a></li>
            <li class="{{ Request::is('stu_pending') ? 'active' : '' }}"><a href="/stu_pending">Pending</a></li>
            <li class="{{ Request::is('stu_approved') ? 'active' : '' }}"><a href="/stu_approved">Approved</a></li>
            <li class="{{ Request::is('stu_declined') ? 'active' : '' }}"><a href="/stu_declined">Declined</a></li>
        </ul>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>

    <div class="container">
        <div class="row">


            <div class="col-md-12">
                @yield('stuenroll_data')
                <!-- YIELDING DATA -->
            </div>
            @yield('enroll_button')
        </div>
    </div>
</div>

@endsection
