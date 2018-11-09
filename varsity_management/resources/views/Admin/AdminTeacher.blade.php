@extends('layout.AdminmainLayout')
@section('title')
Admin | Teacher
@endsection
@section('rightcontent')
<link rel="stylesheet" href="/css/teacherview.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<!-- Script for marking all row -->

<!-- Script for marking all row ends here -->

<center>
    <p style="font-family: Actor;font-size: 35px;margin: 0;">Teacher</p>
</center>

<div class="teacherbody">
    <div class="container">
        <ul style="float: right;margin: 0;">
            <li>Professor: 15</li>
            <li>Lecturer: 25</li>
            <li>Total: 40</li>
        </ul>
        <ul class="nav nav-tabs">

            <li class="{{ Request::is('adminteacher') ? 'active' : '' }}"><a href="/adminteacher">All faculty member</a></li>
            <li class="{{ Request::is('adminteacher_dean') ? 'active' : '' }}"><a href="/adminteacher_dean">Dean</a></li>
            <li class="{{ Request::is('adminteacher_professors') ? 'active' : '' }}"><a href="/adminteacher_professors">Professors</a></li>
            <li class="{{ Request::is('adminteacher_lecturers') ? 'active' : '' }}"><a href="/adminteacher_lecturers">Lecturers</a></li>
        </ul>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>

        <div class="container">
            <div class="row">


                <div class="col-md-12">

                    @yield('adminteacher_data')

                    <div class="clearfix"></div>
                    <ul class="pagination pull-left">
                        <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left" style="height: 20px;"></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-chevron-right" style="height: 20px;"></span></a></li>
                    </ul>



                </div>
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
</div>
@endsection
