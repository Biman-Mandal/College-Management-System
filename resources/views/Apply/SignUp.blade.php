@extends('Apply.ApplyLayout')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>SignUpPage</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ApplyCss/SignUp.css')}}">
</head>
<body>
  <section class="BodySection">
	 	<div class="innerBodySection">
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
	 				<h2>Welcome To Sign Up Page</h2>
	 				<p>Create Account To Continue The Addmission Process</p>
	 			</div>


	 			<div class="SignTable">
	 				<form method="post" action="{{route('InsertSignUp')}}">
	 					@csrf
	 				<div class="innerSignTable">
	 					<div class="SignTableMain FirstRowSignUpTable">
	 								<input type="text" name="Username" required>
	 								<label>Full Name</label>
	 					</div>
	 					<div class="SignTableMain FirstRow1SignUpTable">
	 								<input type="Email" name="Email" required>
	 								<label>Email</label>
	 					</div>
	 				</div>
	 				<div class="innerSignTable innerSignTable2">
	 						<div class="SignTableMain FirstRowSignUpTable">
	 								<input type="Number" name="MobileNumber" required>
	 								<label>Mobile No</label>
	 						</div>
	 					</div>
	 					<div class="innerSignTable innerSignTable2">
	 						<div class="SignTableMain SecondRowSignUpTable SecondRowSignUpTable1">
	 							<select name="City">
	 								<option value="Kolkata">Kolkata</option>
	 								<option value="Midnapore">Midnapore</option>
	 								<option value="Howrah">Howrah</option>

	 							</select>
	 							<label>City</label>
	 						</div>
	 						<div class="SignTableMain SecondRowSignUpTable SecondRowSignUpTable2">
	 							<select name="State">
	 								<option value="WestBengal">West Bengal</option>
	 								<option value="Jharkhand">Jharkhand</option>
	 							</select>
	 							<label>State</label>
	 						</div>
	 						<div class="SignTableMain SecondRowSignUpTable SecondRowSignUpTable3">
	 							<select name="Course">
	 								<option value="BCA">BCA</option>
	 								<option value="BBA">BBA</option>
	 							</select>
	 							<label>Course</label>
	 						</div>
	 					</div>
	 				
	 				<div class="innerSignTable">
	 					<div class="SignTableMain Password">
	 						<tr>
	 							<input type="Password" name="Password" required>
	 							<label>Password</label>
	 						</tr>
	 					</div>
	 				</div>
	 				<div class="innerSignTable">
	 					<div class="SignTableMain Password">
	 						<tr>
	 							<input type="Password" name="PageRetypePassword" required>
	 							<label>Retype Password</label>
	 						</tr>
	 					</div>
	 				</div>
	 					<div class="signUpSubmit">
	 						<input type="submit"value="Submit">
	 					</div>
	 				</form>
	 			</div>
	 			<div class="SignUpLink">
	 				<h2>Already Have Account<span style="font-weight: normal;color: red;font-size: 26px;">?</span><span><a href="/SignUpApply">Log In Now</a></span></h2>
	 			</div>
	 		</div>
	 	</div>
	 </section>
</body>
@endsection