@extends('DatabaseNew.DatabaseTemplate')
@section('content')
<title>|| View Portal Application ||</title>
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
		<div class="ViewDataPAD ViewData">
			<table>
				<tr class="MainHeader">
					<td>FirstName</td>
					<td>Father's Name</td>
					<td>MobileNo</td>
					<td>Email</td>
					<!-- <td>Address</td> -->
					<td>City/Vill</td>
					<td>Email</td>
					<td>Action</td>
					<!-- <td></td> -->
				</tr>
				@foreach($PortalAppD as $Data)
				<tr class="Header">
					<td><img src="./StoredImages/{{$Data->EmployeImage}}" alt=""></td>
					<td>{{$Data->FirstName}}</td>
					<td>{{$Data->fathername}}</td>
					<td>{{$Data->mobile1}}</td>
					<td>{{$Data->cityvill}}</td>

					<td>{{$Data->Email1}}</td>
					<td>
						<a href="#">View</a>
						<br>
						<a href="#">Update</a>
						<br>
						<a href={{"DeletePortalApplication/".$Data->id}}>Delete</a>
					</td>

				</tr>
				@endforeach
			</table>
		</div>
	</div>
</section>
@endsection