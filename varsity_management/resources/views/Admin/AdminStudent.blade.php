@extends('layout.AdminmainLayout')
@section('title')
Admin | Student
@endsection
@section('rightcontent')
<link rel="stylesheet" href="/css/studentview.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<center>
    <p style="font-family: Actor;font-size: 35px;">Student</p>
</center>

<div class="stubody">
    <div class="container">
        <h3>Section:    C6B</h3>
        <ul class="nav nav-tabs">
            
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section: <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Submenu 1-1</a></li>
                    <li><a href="#">Submenu 1-2</a></li>
                    <li><a href="#">Submenu 1-3</a></li>
                </ul>
            </li>
            <li class="active"><a href="#">All Student</a></li>
            <li><a href="#">Retake</a></li>
            <li><a href="#">Recourse</a></li>
            
        </ul>
       
    </div>

</div>

@endsection
