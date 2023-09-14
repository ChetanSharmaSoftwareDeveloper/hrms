<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('admin/dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>Sandwitch Group !</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ url('{{ url('resource/images/img.png" alt="..." class="img-circle profile_img">
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
                            <li><a href="{{ url('admin/dashboard.php') }}">Dashboard</a></li>
                            <!--<li><a href="{{ url('admin/dashboard2.php">Dashboard2</a></li>-->
                            <!--<li><a href="{{ url('admin/dashboard3.php">Dashboard3</a></li>-->
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-edit"></i> Admin <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('employee/createEmployee.php') }}">Create Employee</a></li>
                            <li><a href="{{ url('admin/liveEventHistory.php') }}">Employee History</a></li>

                            <li><a href="{{ url('admin/sendLiveEvent.php') }}">Live Event</a></li>
                            <li><a href="{{ url('admin/liveEventHistory.php') }}">Live Event History</a></li>
                            <li><a href="{{ url('admin/sendNotice.php') }}">Notice</a></li>
                            <li><a href="{{ url('admin/noticeHistory.php') }}">Notice History</a></li>
                        </ul>
                    </li>

                    <li>
                        <a><i class="fa fa-clone"></i>Notice <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('noticeBoard/noticeBoard.php') }}">Notice Board</a></li>
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
                            <li><a href="{{ url('liveEvent/liveEvent.php') }}">View Live Event</a></li>
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
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('{{ url('src/store/Logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>


