
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
	 			<a href="#"><img src="Css/Photos/TIH.jpg" alt="TechnoLogo"></a>
	 		</div>
	 		<div class="RightNav">
	 				<a style="cursor: pointer"  onclick="WelcomeNavApply()">Welcome</a> 			
	 			<div id="WelcomeSectionNav" class="animate1">
	 				<a href="/Application">Insert</a>
	 				<a href="/ApplicationUpdate">Update</a>
	 				<a href="/ApplicationProfile">Profile</a>
	 				<a href="/Logout">Logout</a>
	 			</div>
	 		</div>
	 	</header>
	 	<!--SideNav-->
	 	<div class="navbarApply">
		<nav class="InnernavbarApply">
			<li id="ApplicationForm" class="ApplicatonFormLeft"><i class="fa fa-book" aria-hidden="true"></i><a href="/Application">Application Form</a></li>
			<li id="UpdateApplication"><i class="fa fa-book" aria-hidden="true"></i><a href="ApplicationUpdate">Update Aplication</a></li>
			<li id="ApplicationProfile"><i class="fa fa-user" aria-hidden="true"></i><a href="/ApplicationProfile">Profile</a></li>
			<li id="ApplicationLogout"><i class="fa fa-sign-out" aria-hidden="true"></i><a href="#">Logout</a></li>
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

