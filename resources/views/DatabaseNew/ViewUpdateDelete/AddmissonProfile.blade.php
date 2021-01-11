@extends('DatabaseNew.DatabaseTemplate')
@section('content')
<title>|| View AddmisssionProfile ||</title>
<section class="DatabaseBodySection">
	<div class="DatabaseBodyPositon">
		<div class="ViewTopTextP ViewTopTextD">
			<h2>Welcome To View Page</h2>
			<p>View Data Here...Manage Update & Delete Operations...</p>
			<div class="Underline"></div>
		</div>
		@if($errors->any())
	 	@foreach($errors->all() as $error)
	 	
	 				
	 			
		<div class="ErrorSection" id="ErrorSectionID" onclick="CloseError()">
			<div class="InnerErrorSection">
				<div class="SecondInnerError">
					{{$error}}
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		
		@endforeach
	   @endif
	   @if ($message = Session::get('success') )
	   <div class="ErrorSection" id="ErrorSectionID" onclick="CloseError()">
			<div class="InnerErrorSection">
				<div class="SecondInnerError">
					{{$message}}
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	   @endif
		<div class="ViewDataAP ViewData">
			<table>
				<tr class="MainHeader">
					<td>Full Name</td>
					<td>Mobile Number</td>
					<td>City</td>
					<td>Course</td>
					<!-- <td>Address</td> -->
					<td>Email</td>
					<td>Action</td>
					<!-- <td></td> -->
				</tr>
				@foreach($AddmissionData as $Data)
				<tr class="Header">
					<td>{{$Data->Username}}</td>
					<td>{{$Data->MobileNumber}}</td>
					<td>{{$Data->City}}</td>
					<td>{{$Data->Course}}</td>
					<td>{{$Data->Email}}</td>
					<td>
						<a href="#">View</a>
						<br>
						<a href="#">Update</a>
						<br>
						<a href={{"AddmissionProfileDelete/".$Data->id}}>Delete</a>
					</td>

				</tr>
				@endforeach
			</table>
		</div>
	</div>
</section>
@endsection