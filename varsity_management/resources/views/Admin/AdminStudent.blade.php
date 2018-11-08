@extends('layout.AdminmainLayout')
@section('title')
Admin | Student
@endsection
@section('rightcontent')

<link rel="stylesheet" type="text/css" href="/css/studentview.css">

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">-->
<div>
<section class="searchandsort">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Section
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">C6A</a></li>
            <li><a href="#">C6B</a></li>
            <li><a href="#">C6C</a></li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Show As
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">All</a></li>
            <li><a href="#">Retake</a></li>
            <li><a href="#">Recourse</a></li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort By
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Ascending Order</a></li>
            <li><a href="#">Descending Order</a></li>
        </ul>
    </div>
    <div class="searchbar">
        <input type="text" name="searchstudent_admin" placeholder="Search.." class="searchstudent">
    </div>
</section>
<br>
<br>
<section class="mainpart">

    <center>
        <h2>Section: C6B</h2>
    </center>
    <div class="panel-body">
        <div class="table-container">
            <table class="table-users table" border="0">
                <tbody>
                    <tr>
                        <td width="10" align="center">
                            <i class="fa fa-2x fa-user fw"></i>
                        </td>
                        <td>
                            John Smith<br>
                            <small class="text-muted">ID:1502910201044</small>
                        </td>
                        <td>
                            Regular
                        </td>
                        <td align="center">
                            <button><i class="fa fa-1.5x fa-eye fw" style="color: darkgreen"></i>
                                View</button>
                            <button>
                                <i class="fa fa-ban" style="color: red"></i>
                                Disable
                            </button>

                            <button>
                                <i class="fa fa-user-minus" style="color: black"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td width="10" align="center">
                            <i class="fa fa-2x fa-user fw"></i>
                        </td>
                        <td>
                            John Smith<br>
                            <small class="text-muted">ID:1502910201044</small>
                        </td>
                        <td>
                            Regular
                        </td>
                        <td align="center">
                            <button><i class="fa fa-1.5x fa-eye fw" style="color: darkgreen"></i>
                                View</button>
                            <button>
                                <i class="fa fa-ban" style="color: red"></i>
                                Disable
                            </button>

                            <button>
                                <i class="fa fa-user-minus" style="color: black"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td width="10" align="center">
                            <i class="fa fa-2x fa-user fw"></i>
                        </td>
                        <td>
                            John Smith<br>
                            <small class="text-muted">ID:1502910201044</small>
                        </td>
                        <td>
                            Regular
                        </td>
                        <td align="center">
                            <button><i class="fa fa-1.5x fa-eye fw" style="color: darkgreen"></i>
                                View</button>
                            <button>
                                <i class="fa fa-ban" style="color: red"></i>
                                Disable
                            </button>

                            <button>
                                <i class="fa fa-user-minus" style="color: black"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td width="10" align="center">
                            <i class="fa fa-2x fa-user fw"></i>
                        </td>
                        <td>
                            John Smith<br>
                            <small class="text-muted">ID:1502910201044</small>
                        </td>
                        <td>
                            Regular
                        </td>
                        <td align="center">
                            <button><i class="fa fa-1.5x fa-eye fw" style="color: darkgreen"></i>
                                View</button>
                            <button>
                                <i class="fa fa-ban" style="color: red"></i>
                                Disable
                            </button>

                            <button>
                                <i class="fa fa-user-minus" style="color: black"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td width="10" align="center">
                            <i class="fa fa-2x fa-user fw"></i>
                        </td>
                        <td>
                            John Smith<br>
                            <small class="text-muted">ID:1502910201044</small>
                        </td>
                        <td>
                            Regular
                        </td>
                        <td align="center">
                            <button><i class="fa fa-1.5x fa-eye fw" style="color: darkgreen"></i>
                                View</button>
                            <button>
                                <i class="fa fa-ban" style="color: red"></i>
                                Disable
                            </button>

                            <button>
                                <i class="fa fa-user-minus" style="color: black"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td width="10" align="center">
                            <i class="fa fa-2x fa-user fw"></i>
                        </td>
                        <td>
                            John Smith<br>
                            <small class="text-muted">ID:1502910201044</small>
                        </td>
                        <td>
                            Regular
                        </td>
                        <td align="center">
                            <button><i class="fa fa-1.5x fa-eye fw" style="color: darkgreen"></i>
                                View</button>
                            <button>
                                <i class="fa fa-ban" style="color: red"></i>
                                Disable
                            </button>

                            <button>
                                <i class="fa fa-user-minus" style="color: black"></i>
                                Delete
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>
</div>
@endsection