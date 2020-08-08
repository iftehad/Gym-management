<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Gymnesiam Management Database</title>

	<link rel="shortcut icon" href="<?php echo base_url();?>images/logo.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>



<body class="home" style="font-size:20px; ">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse  headroom">  <!-- navbar-fixed-top -->
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
				<a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo base_url();?>/images/logo.png" width="80px" height="50px" style="padding-right: 10px"  alt=""></a>
			    <a style=" text-decoration:none;" href="#"><p>Gymnesiam Managenent System</p></a>
	
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="<?php echo site_url();?>">Home</a></li>
					<li><a href="<?php echo site_url('Contact');?>">Contact</a></li>
					<li><a class="btn" href="<?php echo site_url('Login/registration');?>">SIGN UP</a></li>
					<li><a class="btn " href="<?php echo site_url('Login');?>">SIGN IN</a></li>
					<li class="dropdown" >
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">MENU<b class="caret"></b></a>
			            <ul class="dropdown-menu" style="font-size: 20px">
			              <li><a href="<?php echo site_url('Home/instructor_list');?>">Instructor</a></li>
			              <li><a href="<?php echo site_url('Home/machine');?>">Machine</a></li>
			              <li><a href="<?php echo site_url('Home/locker')?>">Locker</a></li>
			              <li><a href="#">Exercise</a></li>
			            </ul>
			         </li>
				</ul>
				
				<style type="text/css">
					#searchbar{
						color: black;
						padding: 10px;
						font-size: 14px;
					}
				</style>
				<ul>
					<form  id="searchbar">
					  <input type="text" placeholder="Search.." name="search">
					  <button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->


	<?php $this->load->view($body_page);?>

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+880 180 000 0001<br>
								<a href="mailto:#">some.email@bfd.com</a><br>
								<br>
								1229,Bashundhara R/A,Dhaka,Bangladesh
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow Us</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Gymnesiam Mangement Database</h3>
						<div class="widget-body">
							 <p>Gym management system is an easy-to-use gym and health club membership management system. It helps you keep records of your members and their memberships, and allows easy communication between you and your members. Gym Management system is also feature-packed, helping you in the management and growth of your club.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> |  
								<a href="contact.html">Contact</a> |
								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 25 march 18 | Gymnesiam Managenent System
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/headroom.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jQuery.headroom.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/template.js"></script>
</body>
</html>