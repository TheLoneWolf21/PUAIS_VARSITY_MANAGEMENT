@extends('layout.AdminmainLayout')
@section('title')
Admin | Student
@endsection
@section('rightcontent')
<link rel="stylesheet" href="/css/studentview.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<!-- Script for marking all row -->

<!-- Script for marking all row ends here -->

<center>
    <p style="font-family: Actor;font-size: 35px;margin: 0;">Student</p>
</center>

<div class="stubody">
    <div class="container">

        <h3 style="margin: 0;float: left;">Section: C6B</h3>
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
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section: <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">C6A</a></li>
                    <li><a href="#">C6B</a></li>
                    <li><a href="#">C6C</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('adminstu') ? 'active' : '' }}"><a href="/adminstu">All Student</a></li>
            <li class="{{ Request::is('adminstu_regular') ? 'active' : '' }}"><a href="/adminstu_regular">Regular</a></li>
            <li class="{{ Request::is('adminstu_retake') ? 'active' : '' }}"><a href="/adminstu_retake">Retake</a></li>
            <li class="{{ Request::is('adminstu_recourse') ? 'active' : '' }}"><a href="/adminstu_recourse">Recourse</a></li>
        </ul>

    </div>


    <!-- Student Table -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>

    <div class="container">
        <div class="row">


            <div class="col-md-12">
                @yield('adminstu_data')
                <!-- YIELDING DATA -->

            </div>
            @yield('page_number')
        </div>
    </div>


    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Mohsin">
                    </div>
                    <div class="form-group">

                        <input class="form-control " type="text" placeholder="Irshad">
                    </div>
                    <div class="form-group">
                        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                </div>
                <div class="modal-body">

                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#mytable #checkall").click(function() {
                if ($("#mytable #checkall").is(':checked')) {
                    $("#mytable input[type=checkbox]").each(function() {
                        $(this).prop("checked", true);
                    });

                } else {
                    $("#mytable input[type=checkbox]").each(function() {
                        $(this).prop("checked", false);
                    });
                }
            });

            $("[data-toggle=tooltip]").tooltip();
        });

    </script>

    <!-- Student Table ends here -->
</div>

@endsection
