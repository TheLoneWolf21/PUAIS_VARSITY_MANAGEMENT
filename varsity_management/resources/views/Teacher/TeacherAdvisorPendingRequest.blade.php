@extends('layout.AdminmainLayout')
@section('title')
Teacher | Pending
@endsection
@section('rightcontent')

<center>
    <p style="font-family: Actor;font-size: 35px;margin: 0;">Pending Request</p>
</center>

<div class="teacherstu_pendingbody">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="{{ Request::is('teacher_pending') ? 'active' : '' }}"><a href="teacher_pending">Advising</a></li>
        </ul>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('teacheradvisor_pendingbody_data')
                <!-- YIELDING DATA -->
            </div>
            @yield('page_number')
        </div>
    </div>
</div>
@endsection
