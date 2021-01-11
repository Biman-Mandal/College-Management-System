@extends('Apply.Applicationlayout')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ApplyCss/Profile.css')}}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	@if(Session::get('Profile'))
	@foreach(Session::get('Profile') as $Data)
	<form method="post" enctype="multipart/form-data" action="{{route('ProfileAction', ['id' => $Data->id])}}">
		@csrf
		<section class="ProfileSection">
			@if ($message = Session::get('success') )
	 				<div class="SuccessMSG">
	 				<h2>{{$message}}</h2>

	 				</div>
	 			@endif
			<div class="upperdiv">

					
				<div class="innerdiv">
					</div>
					<div class="profileDiv">
						<div class="ProfileInnerDiv">
							<div class="ProfileImgDiv">
								<!-- <h2>{{$Image}}</h2> -->
								<img src="./StoredImages/{{$Image}}" alt="">
							</div>
							<div class="ProfileNameDiv">
								<h2>{{$Data->Username}}</h2>
							</div>
							<div class="ProfileDetail">
								
								<div class="innerProfileDetail">
								<td><input class="Input" type="text" name="Username" value="{{$Data->Username}}"></td>
								 <div class="labelIcon">
								 	<i class="fa fa-envelope" aria-hidden="true"></i>
								 	<label>Name</label>
								 </div>
								 </div>
								 <div class="innerProfileDetail1">
								 	<td><input class="Input" type="text" name="Email" value="{{$Data->Email}}"></td>
								 <div class="labelIcon">
								 	<i class="fa fa-phone-square" aria-hidden="true"></i>
								 	<label>Email</label>
								 </div>
							</div>
							<div class="innerProfileDetail2">
								 	<td><input class="Input" type="text" name="MobileNumber" value="{{$Data->MobileNumber}}"></td>
								 <div class="labelIcon">
								 	<i class="fa fa-address-card-o" aria-hidden="true"></i>
								 	<label>Mobile</label>
								 </div>
							</div>

							<div class="innerProfileDetail3">
								 	<td><input class="Input" type="text" name="City" value="{{$Data->City}}"></td>
								 <div class="labelIcon">
								 	<i class="fa fa-address-card-o" aria-hidden="true"></i>
								 	<label>City</label>
								 </div>
							</div>
							<div class="innerProfileDetail4">
								 	<td><input class="Input" type="text" name="State" value="{{$Data->State}}"></td>
								 <div class="labelIcon">
								 	<i class="fa fa-book" aria-hidden="true"></i>
								 	<label>State</label>
								 </div>
							</div>
							<div class="innerProfileDetail6">
								 	<td><input class="Input" type="text" name="Course" value="{{$Data->Course}}"></td>
								 <div class="labelIcon">
								 	<i class="fa fa-book" aria-hidden="true"></i>
								 	<label>Course</label>
								 </div>
							</div>
							<div class="innerProfileDetail5">
								<input type="submit"  value="Update">
							</div>
						</div>
						</div>	
				</div>	
			</section>
		</form>
</body>
</html>

@endforeach
@endif
@endsection