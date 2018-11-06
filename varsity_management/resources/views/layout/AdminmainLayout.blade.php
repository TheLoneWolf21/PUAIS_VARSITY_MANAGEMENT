<html>

<head>
    <title>ADMIN | PUAIS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Wahid Sakib">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="description" content="Varsity management system | PUAIS">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>
    <link rel="stylesheet" type="text/css" href="css/mainLayout.css">

</head>

<body>
    <!-- WHOLE BODY -->
    <div class="wbody">
        <section class="topbar">
            <!-- TOPBAR STARTS HERE -->
            <div class="topb">
                <div class="logo">
                    <p><b>XYZ</b></p>
                </div>
                <div class="options">
                    <nav>
                        <div class="notifications">
                            <div class="iconAndbubble">
                                <div class="far fa-bell"></div>
                                <span class="notificationBubble">9</span>
                            </div>
                            <ul class="topul">
                                <li>
                                    <span class="icon"></span>
                                    <span class="text">Someone Liked your post</span>
                                </li>
                                <li>
                                    <span class="icon"></span>
                                    <span class="text">Someone Liked you post</span>
                                </li>
                                <li>
                                    <span class="icon"></span>
                                    <span class="text">Someone Liked you post</span>
                                </li>
                                <li>
                                    <span class="icon"></span>
                                    <span class="text">Someone Liked you post</span>
                                </li>
                                <li>
                                    <span class="icon"></span>
                                    <span class="text">Someone Liked you post</span>
                                </li>
                            </ul>
                        </div>
                        <div class="users">Admin</div>
                        <div class="fa fa-power-off"></div>
                    </nav>
                </div>
            </div>
        </section>

        <!-- TOPBAR ENDS HERE -->
        <section class="sidebarAndContent">

            <!-- SIDEBAR CONTENTS STARTS HERE -->
            <div class="Leftcontainer">
                <!-- Sider bar er top information -->

                <center>
                    <h2>PUAIS</h2>
                </center>
                <div class="topinfo">
                    <div class="far fa-user" style="margin-left: 45%; color: aliceblue;"></div>
                    <br>
                    <p class="user">Admin</p>

                </div>
                <!-- options with logo -->
                <div class="optionsSide">
                    <ul class="sideul">
                        <li onclick="location.href='{{ url('admin') }}'" class="{{ Request::is('admin') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fab fa-dashcube"></div>

                                <div class="icontext">Dashboard</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('adminstu') }}'" class="{{ Request::is('adminstu') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-user"></div>

                                <div class="icontext">Student</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('admincourse') }}'" class="{{ Request::is('admincourse') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fab fa-discourse"></div>
                                <div class="icontext">Course</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('adminteacher') }}'" class="{{ Request::is('adminteacher') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-chalkboard-teacher"></div>
                                <div class="icontext">Teacher</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('adminroutine') }}'" class="{{ Request::is('adminroutine') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-object-group"></div>
                                <div class="icontext">Routine</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('adminresult') }}'" class="{{ Request::is('adminresult') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-clipboard"></div>
                                <div class="icontext">Result</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('adminlibrary') }}'" class="{{ Request::is('adminlibrary') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-book"></div>
                                <div class="icontext">Library</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('admincoursefee') }}'" class="{{ Request::is('admincoursefee') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-dollar-sign"></div>
                                <div class="icontext">Course Fee</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('adminsection') }}'" class="{{ Request::is('adminsection') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-list"></div>
                                <div class="icontext">Section</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('adminmail') }}'" class="{{ Request::is('adminmail') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-mail-bulk"></div>
                                <div class="icontext">Mail/SMS</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('adminnotice') }}'" class="{{ Request::is('adminnotice') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-bell"></div>
                                <div class="icontext">Notice</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('adminsetting') }}'" class="{{ Request::is('adminsetting') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="	fas fa-cogs"></div>
                                <div class="icontext">Setting</div>
                            </div>
                        </li>
                        <li  onclick="location.href='{{ url('stuenrollment') }}'" class="{{ Request::is('stuenrollment') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-plus"></div>
                                <div class="icontext">Enrollment</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('stuadvisor') }}'" class="{{ Request::is('stuadvisor') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fab fa-tripadvisor"></div>
                                <div class="icontext">Advisor</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('teacherrequestsubject') }}'" class="{{ Request::is('teacherrequestsubject') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-book-open"></div>
                                <div class="icontext">Request Subject</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('teacherpendingrequest') }}'" class="{{ Request::is('teacherpendingrequest') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-pen-alt"></div>
                                <div class="icontext">Pending Request</div>
                            </div>
                        </li>
                        <li onclick="location.href='{{ url('stupayment') }}'" class="{{ Request::is('stupayment') ? 'active' : '' }}">
                            <div class="logoplustext">
                                <div class="fas fa-credit-card"></div>
                                <div class="icontext">Payment</div>
                            </div>
                        </li>
                        

                    </ul>
                </div>
            </div>
            <!-- SIDEBAR CONTENTS ENDS HERE -->
            <div class="Rightcontainer">
                <!-- Right Side content starts here -->
                @yield('rightcontent')

                <!-- Right Side content ends here -->
            </div>
        </section>

    </div>

</body>

</html>
