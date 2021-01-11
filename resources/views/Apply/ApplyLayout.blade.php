<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ApplyCss/ApplyLayout.css')}}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="OpaningLoad()">
	 <div id="loading"></div>
	 <section class="ApplySection">
	 	<header class="ApplyTopHeader">
	 		<div class="ApplyTechnoLogo">
	 			<a href="/ApplyOnline"><img src="Css/Photos/TIH.jpg" alt="TechnoLogo"></a>
	 		</div>
	 		<div class="RightNav">
	 				<a style="cursor: pointer" onclick="RightNavApply()">Apply</a> 			
	 			<div id="LoginSectionNav" class="animate1">
	 				<span><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
	 				<a href="/ApplyOnline">Login</a>
	 				<a href="/SignUpApply">Sign Up</a>
	 			</div>
	 		</div>
	 	</header>
	 	<!--SideNav-->
	 	<div class="navbarApply">
		<nav class="InnernavbarApply">
<li onclick="Register()"><i class="fa fa-plus-circle" aria-hidden="true"></i><a class="InnerSideResgister" href="#">Register</a></li>
		<div id="LoginSide" class="animate1">
			<li style="list-style: none;"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="/ApplyOnline">Login</a></li>
			<li style="list-style: none;"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="/SignUpApply">Sign Up</a></li>
		</div>
			<li onclick="Coursess()"><i class="fa fa-plus-circle" aria-hidden="true"></i><a class="InnerSideResgister" href="#">Courses Detail</a></li>
		<div id="Courses" class="animate">
		<a href="/BCA">BCA</a>
		<a href="/BBA">BBA</a>
		<a href="/MCA">MCA</a>
		<a href="#">MBA</a>
		</div>
			<li><i class="fa fa-file-text-o" aria-hidden="true"></i><a href="#">Required Documents</a></li>
			<li><i class="fa fa-th" aria-hidden="true"></i><a href="#">About</a></li>
			<li><i class="fa fa-th" aria-hidden="true"></i><a href="#">Contact</a></li>

		</nav>
	</div>
	<nav class="rightnav">
		<div class="innerrightnav"><h3>Need Help?</h3></div>
	</nav>
	</section>	 	
	@yield('content')
</body>
<script src="{{ asset('js/sideNavbar.js')}}"></script>
<script src="{{ asset('js/ApplyOnlinePage.js')}}"></script>

</html>