
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="images/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title> User</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="grey" data-image="<?php echo base_url();?>images/slide.jpg">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="<?php echo site_url('Home/index');?>" class="simple-text">
                    GYM Database
                </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="<?php echo site_url('Dashboard/dashboard_page');?>">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Dashboard/update_profile');?>">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Dashboard/members_details');?>">
                            <i class="pe-7s-user"></i>
                            <p>Members</p>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('Home/help');?>">
                            <i class="pe-7s-note2"></i>
                            <p>Helplist</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Dashboard/index');?>">
                            <i class="pe-7s-box1"></i>
                            <p>Bath</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-inverse navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <a class="navbar-brand" href="#">User</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-dashboard"></i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>


                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="">
                                    <p>Account</p>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo site_url('Login/logout');?>">
                                    <p>Sign Out</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>




            <footer class="footer">
                <div class="container-fluid">

                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <a href="#">GYM Database</a>
                    </p>
                </div>
            </footer>

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo base_url();?>assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url();?>assets/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url();?>assets/js/demo.js"></script>

</html>
