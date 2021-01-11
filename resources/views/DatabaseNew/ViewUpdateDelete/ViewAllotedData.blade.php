@extends('DatabaseNew.DatabaseTemplate')
@section('content')
<title>|| View Alloted ||</title>
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
		<div class="ViewData ViewDataA">
			<table>
				<tr class="MainHeader">
					<td>No</td>
					<td>Teacher</td>
					<td>Subject</td>
					<td>Semester</td>
					<!-- <td>Address</td> -->
					<td>Start Date</td>
					<td>End Date</td>
					<td>Action</td>
					<!-- <td></td> -->
				</tr>
				@foreach($AddlotedData as $Data)
				<tr class="Header">
					<td>{{ $Data->count() }}</td>
					<td>{{$Data->ATName}}</td>
					<td>{{$Data->ASub}}</td>
					<td>{{$Data->ASem}}</td>
					<td>{{$Data->AStartDate}}</td>
					<td>{{$Data->AEnddata}}</td>
					<td>
						<a href="#">View</a>
						<br>
						<a href="#">Update</a>
						<br>
						<a  href={{"deleteAlloted/".$Data->id}}>Delete</a>
					</td>

				</tr>
				@endforeach
			</table>
		</div>
	</div>
</section>
@endsection