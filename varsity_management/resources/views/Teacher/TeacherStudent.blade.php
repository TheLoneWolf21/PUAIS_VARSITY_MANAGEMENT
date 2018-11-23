@extends('layout.AdminmainLayout')
@section('title')
Teacher | View
@endsection
@section('rightcontent')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<!-- Script for marking all row -->

<!-- Script for marking all row ends here -->

<center>
    <p style="font-family: Actor;font-size: 35px;margin: 0;">Student</p>
</center>

<div class="teacherstubody">
    <div class="container">

        <h3 style="margin: 0;float: left;">Computer Network</h3>
        <ul style="margin: 0;float: right; ">
            <li>Regular: 47</li>
            <li>Retake: 5</li>
            <li>Recourse: 2</li>
            <li>Total: 54</li>
        </ul>
        <br />
        <br />
        <ul class="nav nav-tabs">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Course <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Computer Network - Section C5B</a></li>
                    <li><a href="#">Software Develepoment - section C6B</a></li>
                    <li><a href="#">Software Develepoment - section C6B</a></li>
                </ul>
            </li>
        </ul>
        </div>


    <!-- Student Table -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>

    <div class="container">
        <div class="row">


            <div class="col-md-12">
                @yield('teacherstu_data')
                <!-- YIELDING DATA -->

            </div>
            @yield('page_number')
        </div>
    </div>
</div>
@endsection