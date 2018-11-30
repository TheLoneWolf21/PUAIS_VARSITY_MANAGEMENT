@extends('layout.AdminmainLayout')
@section('title')
Admin | Subject
@endsection
@section('rightcontent')
<link rel="stylesheet" href="/css/studentview.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<center>
    <p style="font-family: Actor;font-size: 35px;margin: 0;">Subject</p>
</center>

<div class="stubody">
    <div class="container">
        <ul class="nav nav-tabs">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section: <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">C6A</a></li>
                    <li><a href="#">C6B</a></li>
                    <li><a href="#">C6C</a></li>
                </ul>

                @endsection
