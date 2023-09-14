<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Human Resource Management Sysytem</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/css/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="../admin/dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>Sandwitch Group !</span></a>
                    </div>

                    <div class="clearfix"></div>    

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ asset('assets/images/img.png') }}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Sandwitch Group</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../admin/dashboard.php">Dashboard</a></li>
                                        <!--<li><a href="../admin/dashboard2.php">Dashboard2</a></li>-->
                                        <!--<li><a href="../admin/dashboard3.php">Dashboard3</a></li>-->
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-edit"></i> Admin <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../employee/createEmployee.php">Create Employee</a></li>
                                        <li><a href="../admin/liveEventHistory.php">Employee History</a></li>

                                        <li><a href="../admin/sendLiveEvent.php">Live Event</a></li>
                                        <li><a href="../admin/liveEventHistory.php">Live Event History</a></li>
                                        <li><a href="../admin/sendNotice.php">Notice</a></li>
                                        <li><a href="../admin/noticeHistory.php">Notice History</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a><i class="fa fa-clone"></i>Notice <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../noticeBoard/noticeBoard.php">Notice Board</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Live On</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a><i class="fa fa-laptop"></i> Live Event <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../liveEvent/liveEvent.php">View Live Event</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="../../src/store/Logout.php">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/images/img.png') }}" alt="">Sandwitch Group
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li><a href="{{ asset('assets/src/store/Logout.php') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-calendar"></i>
                                    <span class="badge bg-green">event</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">

                                    <?php $events = array(); ?>
                                       @foreach ($events as $event)
                                 
                                    <li>
                                        <a>
                                            <span class="image"><img src="{{ asset('assets/images/img.png') }}" alt="Profile Image" /></span>
                                            <span>
                                              <span>Sandwitch Group</span>
                                              <span class="time">event time</span>
                                            </span>
                                            <span class="message">
                                              subject
                                           </span>
                                        </a>
                                    </li>
                                   @endforeach
                                    <li>
                                        <div class="text-center">
                                            <a href="../liveEvent/liveEvent.php">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('assets/js/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('assets/js/nprogress.js') }}"></script>
<!-- Chart.js') }} -->
<script src="{{ asset('assets/js/Chart.min.js') }}"></script>
<!-- jQuery Sparklines -->
<script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>
<!-- Flot -->
<script src="{{ asset('assets/js/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flot.resize.js') }}"></script>
<!-- Flot plugins -->
<script src="{{ asset('assets/js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('assets/js/curvedLines.js') }}"></script>
<!-- DateJS -->
<script src="{{ asset('assets/js/date.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset('assets/js/custom.min.js') }}"></script>