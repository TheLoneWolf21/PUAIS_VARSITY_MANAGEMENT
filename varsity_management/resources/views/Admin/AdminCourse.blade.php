@extends('layout.AdminmainLayout')

@section('title')
Admin | Course
@endsection
@section('rightcontent')
<style>
    .drop {
        width: 230px;
        text-align: center;
        margin-top: 4px;
        height: 30px;
        background: white;
        
    }
    

</style>
<link rel="stylesheet" href="/css/admincourseview.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<center>
    <p style="font-family: Actor;font-size: 35px;margin: 0;">Course</p>
</center>

<div class="coursebody">
    <div class="container">
        <h3 style="margin: 0;float: left;">Section: C6B</h3>
        <button type="button" class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#myModal">Add Course</button>
        <br />
        <br />
        <ul class="nav nav-tabs">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section: <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">C6A</a></li>
                    <li><a href="#">C6B</a></li>
                    <li><a href="#">C6C</a></li>
                </ul>
            </li>

        </ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>

    <div class="container">
        <div class="row">


            <div class="col-md-12">
                @yield('admincourse_data')
            </div>



            <div class="container">
                <h2>Modal Example</h2>
                <!-- Trigger the modal with a button -->

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <form action="/add_subject" type="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Course</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <select class="drop" name="semester">
                                        <option value="0">----Select Semester----</option>
                                        <option value="1">1<sup>st</sup> Semester</option>
                                        <option value="2">2<sup>nd</sup> Semester</option>
                                        <option value="3">3<sup>rd</sup> Semester</option>
                                        <option value="4">4<sup>th</sup> Semester</option>
                                        <option value="5">5<sup>th</sup> Semester</option>
                                        <option value="6">6<sup>th</sup> Semester</option>
                                        <option value="7">7<sup>th</sup> Semester</option>
                                        <option value="8">8<sup>th</sup> Semester</option>
                                    </select>
                                    <br />
                                    <br />
                                    <label for="usr">Add course name:</label>
                                    <input type="text" class="form-control" id="usr" name="subject_name">
                                    <label for="usr">Course code :</label>
                                    <input type="text" class="form-control" id="usr" name="subject_code">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Add</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                            </form>
                    </div>
                </div>

            </div>
            @endsection
