@extends('layout.AdminmainLayout')
@section('title')
Student | Result
@endsection
@section('rightcontent')
<link rel="stylesheet" href="/css/studentenroll.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<center>
    <p style="font-family: Actor;font-size: 35px;margin: 0;">Result</p>
</center>

<div class="stuenrollbody">
    <div class="container">

 <ul class="nav nav-tabs">
     <li class="{{ Request::is('stu_semester_overview') ? 'active' : '' }}"><a href="stu_semester_overview">Semester Overview</a></li>
     <li class="{{ Request::is('stu_result_view') ? 'active' : '' }}"><a href="stu_result_view">View Result</a></li>
</ul>
 <div class="container">
        <div class="row">


            <div class="col-md-12">
                @yield('stu_result_data')
                <!-- YIELDING DATA -->

            </div>
            @yield('page_number')
        </div>
    </div>
    </div>
</div>
@endsection
