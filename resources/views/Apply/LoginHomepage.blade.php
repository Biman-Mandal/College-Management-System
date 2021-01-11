@extends('Apply.ApplyLayout')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>LoginPage</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ApplyCss/Login.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ApplyCss/SignUp.css')}}">
</head>
<body>
	 <section class="BodySection">
	 	<div class="innerBodySection">
	 			@if ($message = Session::get('success') )
	 		<div class="SuccessMsg">
	 				<h2>{{$message}}</h2>

	 		</div>
	 			@endif
	 		<div class="loginMainDiv">
	 			<div class="ErrorSignUP">
	 				@if($errors->any())
	 				@foreach($errors->all() as $error)
					<div class="InnerError">
					{{$error}}
					</div>
					@endforeach
					@endif
	 			</div>
	 			<div class="loginWelcomeMsg">
	 				<h2>Welcome Back</h2>
	 				<p>Login For continue the the Admission Process</p>
	 			</div>
	 			<div class="loginTable">
	 				<form method="post" action="{{route('login')}}">
	 					@csrf
						<div class="inputbox">
							<input type="Email" name="Email" required>
							<label>Email</label> 
						</div>
						<div class="inputbox">
							<input type="Password" name="Password" required>
							<label>Password</label> 
						</div>
						<div class="inputbox">
							<input type="Password" name="LoginRetypePass" required>
							<label>Retype Password</label> 
						</div>
							<input type="submit" value="Login">
						</form>
	 			</div>
	 			<div class="SignUpLink">
	 				<h2><a href="#">Forgot Password?</a></h2>
	 				<h2>New Here<span style="font-weight: normal;color: red;font-size: 26px;">?</span><span><a href="/SignUpApply">Sign Up Now</a></span></h2>
	 			</div>
	 		</div>
	 	</div>
	 </section>
</body>
</html>



@endsection