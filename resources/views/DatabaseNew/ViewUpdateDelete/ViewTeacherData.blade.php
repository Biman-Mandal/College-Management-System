@extends('DatabaseNew.DatabaseTemplate')
@section('content')
<title>|| View Teacher ||</title>
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
		<div class="ViewDataT ViewData">
			<table>
				<tr class="MainHeader">
					<td>Profile Img</td>
					<td>FirstName</td>
					<td>LastName</td>
					<td>District</td>
					<!-- <td>Address</td> -->
					<td>Mobile Number</td>
					<td>Email</td>
					<td>Action</td>
					<!-- <td></td> -->
				</tr>
				@foreach($TeacherData as $Data)
				<tr class="Header">
					<td><img src="./StoredImages/{{$Data->TeacherImage}}" alt=""></td>
					<td>{{$Data->TeacherFirstname}}</td>
					<td>{{$Data->TeacherLastname}}</td>
					<td>{{$Data->TeacherDistrict}}</td>
					<td>{{$Data->TeacherMobileNumber}}</td>
					<td>{{$Data->TeacherEmail}}</td>
					<td>
						<a href="#">View</a>
						<br>
						<a href="#">Update</a>
						<br>
						<a href={{"deleteTeacher/".$Data->id}}>Delete</a>
					</td>

				</tr>
				@endforeach
			</table>
		</div>
	</div>
</section>
@endsection
