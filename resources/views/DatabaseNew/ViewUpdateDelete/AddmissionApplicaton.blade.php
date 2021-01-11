@extends('DatabaseNew.DatabaseTemplate')
@section('content')
<title>|| View Addmisssion Application ||</title>
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
		<div class="ViewDataAdApp ViewData">
			<table>
				<tr class="MainHeader">
					<td>Student Image</td>
					<td>FirstName</td>
					<td>District</td>
					<td>Course</td>
					<td>Mobile No</td>
					<!-- <td>Address</td> -->
					<td>Email</td>
					<td>Action</td>
					<!-- <td></td> -->
				</tr>
				@foreach($AddmisionApp as $Data)
				<tr class="Header">
					<td><img src="./StoredImages/{{$Data->StudentImg}}" alt=""></td>

					<td>{{$Data->Firstname}}</td>
					<td>{{$Data->District}}</td>
					<td>{{$Data->Course}}</td>
					<td>{{$Data->MobileNumber}}</td>
					
					<td>{{$Data->Email}}</td>
					<td>
						<a href="#">View</a>
						<br>
						<a href="#">Update</a>
						<br>
						<a href={{"AddmissionApplicationDelete/".$Data->id}}>Delete</a>
					</td>

				</tr>
				@endforeach
			</table>
		</div>
	</div>
</section>
@endsection