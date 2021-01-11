@if(Session::get('DatabaseProfile'))
<!DOCTYPE html>
<html>
<head>
	<!-- <title>|| Database ||</title> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/NewDatabase/style1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/NewDatabase/style2.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/NewDatabase/StyleDemo.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/NewDatabase/StyleDemo1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/NewDatabase/viewData.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/NewDatabase/Responsive.css')}}">
	
</head>
<!-- Onload Function Loading Function -->

<body onload="OpaningLoad()">

<div id="loading"></div>


	 		<!-- End Of Loading Function -->


	<!-- Templete Then Will Use In Every Page of database  -->
				<!-- Top Navbar -->
	<section class="NavbarSection"> <!-- Templete section -->
		<!-- Top Navbar Section -->
		<div class="TopNavbar"> 
			<div class="TechnoIcon">
				<img src="Css/NewDatabase/Image&Logo/TIH.jpg">
			</div>
			<div class="DatabaseText">
				<a href="/Database">Database</a>
			</div>
			<div class="TopNavbarIcon" onclick="SideNavIconFun()">
				<!-- <img src="./Css/NewDatabase/Image&Logo/Nav_logo1.png"> -->
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			<div class="Logout">
				<a href="/DatabaseLogout">Logout<i class="fa fa-sign-out" aria-hidden="true"></i></a>
			</div>
		</div>
		<!-- Side Navbar -->
		<div class="SideNavbar">
			<div class="InnerSideNavbar">
				<!-- Insert Side Navbar JavaScript -->
				<li onclick="FirstSideDrop()"><i class="fa fa-plus-circle" aria-hidden="true"></i>Insert</li>
				<div class="SideNavDrop" id="SideNavDropId1">
					<a href="#">Student</a>
					<a href="#">Teacher</a>
					<a href="#">Alloted</a>
					<a href="#">Employee</a>
				</div>
				<!-- View Side Navbar JavaScript -->
				<li onclick="SecondSideDrop()"><i class="fa fa-plus-circle" aria-hidden="true"></i>View</li>
				<div class="SideNavDrop" id="SideNavbarId2">
					<a href="/ViewStudent">Student</a>
					<a href="/ViewTeacher">Teacher</a>
					<a href="/ViewAlloted">Alloted</a>
					<a href="/ViewEmployee">Employee</a>
				</div>
				<!-- Student Potal database -->
				<li onclick="ThirdSideDrop()"><i class="fa fa-plus-circle" aria-hidden="true"></i>Student Portal</li>
				<div class="SideNavDrop" id="SideNavbarId3">
					<a href="/ProfilePotal">Profile</a>
					<a href="/ApplicationPotal">Application</a>
					
				</div>
				<!-- Application form database -->
				<li onclick="FourthSideDrop()"><i class="fa fa-plus-circle" aria-hidden="true"></i>Admission</li>
				<div class="SideNavDrop" id="SideNavbarId4">
					<a href="/ProfileAddmission">Profile</a>
					<a href="/ApplicationAddmission">Application Form</a>
					
				</div>
				<li id="logoutFun"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</li>

			</div>
		</div>

	</section>


@yield('content')









	<!-- Js -->
	<script type="text/javascript" src="js/DatabaseNew.js"></script>
	<script type="text/javascript" src="js/DatabaseNew1.js"></script>
	<script type="text/javascript" src="js/DatabaseNew2.js"></script>

</body>
</html>
@endif