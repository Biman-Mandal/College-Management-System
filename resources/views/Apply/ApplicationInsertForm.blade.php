@extends('Apply.Applicationlayout')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Application Form</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ApplyCss/Application.css')}}">
</head>
<body>
	@if(Session::get('Profile'))
	<section class="AppSection">
		<div class="AppInnerSection">
			<!-- Position Center -->
			<div class="AppMainDiv">
				@if($errors->any())
	 				@foreach($errors->all() as $error)
					<div class="Error">
						<p>Already have an account in this email</p>
					<!-- {{$error}} -->
					</div>
					@endforeach
				@endif
					@if ($message = Session::get('success') )
	 				<div class="SuccessMSG">
	 				<h2>{{$message}}</h2>

	 				</div>
	 			@endif
					
				<!-- For Padding In Two Side -->
<div class="InnerAppMainDiv">
				<div class="InnerAppMainDiv1 AppReuired">
					<p><span>Note :</span> Required fields are marked with an asterisk<span>(*)</span></p>
				</div>

				<form method="post" enctype="multipart/form-data" action="{{route('ApplicationFormSubmit')}}">
					
					@foreach(Session::get('Profile') as $test)
	 					@csrf
				<div class="InnerAppMainDiv1 Apph2">
					<div>
						<h3>Personal Details</h3>
					</div>
					<div class="divtable1">
						<table>
						<tr>
							<th>Desired Course </th>
							
								<td>
									<input type="text" name="Course" value="{{$test->Course}}"  class="field left" required="required">
								</td>
								
						</tr>
						<tr>
							<th>Student Name</th>
							<td><input type="First-name" name="Firstname" placeholder="First Name" required="required"></td>
							<td><input type="Last-Name" name="Lastname" placeholder="Last Name" required="required"></td>
						</tr>
						<tr>
							<th>Address</th>
							<td  colspan="2"><input type="text" name="Address" required="required"></td>
						<tr>
								<th>District</th>
								<td><input type="text" name="District" required="required"></td>
							</tr>
							
						</table>
					</div>
					<div class="Innerdivtable1">
						<div class="Innertable1 leftInnerdivtable1">
							
							<table>
							<tr>
								<th>Gender</th>
								<td>
									<select name="Gender"> 
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									</select>
							</td>
							</tr>
							<tr>
								<th>Landline</th>
								<td><input type="text" name="LandlineNo" required="required"></td>
							</tr>
							<tr>
								<td>Mobile</td>
								<td><input type="text" name="MobileNumber" value="{{$test->MobileNumber}}" required="required"></td>
							</tr>
							<tr>
								<th>
									Email
								</th>
								
								<td>
									<input type="text" name="Email" value="{{$test->Email}}"  class="field left" readonly="readonly">
								</td>
								
							</tr>
							<tr>
									<td>Admission Category</td>
									<td><input type="text" value="Online" name="AdmissionCategory" readonly="readonly"></td>
								</tr>
								
						</table>
						</div>
						<div class="Innertable1 leftInnerdivtable1">
							<table>
								<tr>
								<th>State</th>
								
								<td>
									<input type="text" name="State" value="{{$test->State}}"  class="field left" required="required">
								</td>
								
							</tr>
								<tr>
									<th>Date Of Birth</th>
									<td><input type="date" name="DateOfBirth" required="required"></td>
								</tr>	
								<tr>
									<td>Upload Image</td>
									<td><input type="file" name="StudentImg" required="required"></td>
								</tr>	

							</table>
						</div>
					</div>
				</div>
				<div class="InnerAppMainDiv1 Apph2">
					<div>
						<h3>Parent's Details</h3>
					</div>
					<div class="Innerdivtable1">
						<div  class="Innertable1 leftInnerdivtable1">
							<table>
								<tr>
									<th>Father's Name</th>
									<td><input type="text" name="FatherName" required="required"></td>
								</tr>
								<tr>
									<th>Mother's Name</th>
									<td><input type="text" name="MotherName" required="required"></td>
								</tr>
								<tr>
									<th>Parent's Mobile</th>
									<td><input type="text" name="ParentNumber" required="required"></td>
								</tr>
								<tr>
									<th>Family Income</th>
									<td>
										<select name="FamilyIncome">
										<option value="LessThan100000">Less Than 100000</option>
										<option value="100000-200000">100000-200000</option>
										<option value="200000-300000">200000-300000</option>
										<option value="300000-400000">300000-400000</option>
										<option value="Abobe400000">Abobe-400000</option>

									</td>
								</tr>
							</table>
						</div>
						<div class="Innertable1 leftInnerdivtable1">
							<table>
								<tr>
									<th>Father's Profession</th>
									<td><input type="text" name="FatherProfession" required="required"></td>
								</tr>
								<tr>
									<th>Mother's Profession</th>
									<td><input type="text" name="MotherProfession" required="required"></td>
								</tr>
								<tr>
									<th>Parent's e-mail</th>
									<td><input type="Email" name="ParentEmail" required="required"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="InnerAppMainDiv1 Apph2">
					<div>
						<h3>Class X Details</h3>
					</div>
					<div class="Innerdivtable1">
						<div  class="Innertable1 leftInnerdivtable1">
							<table>
								<tr>
									<th>School/Institution</th>
									<td><input type="text" name="School10th" required="required"></td>
								</tr>
								<tr>
									<th>Total Marks</th>
									<td><input type="Number" name="Total10thMarks" required="required"></td>
								</tr>
								<tr>
									<th>Board/Council</th>
									<td><input type="text" name="thBoardCouncil10" required="required"></td>
								</tr>
								<tr>
									<th>Year of Passing</th>
									<td>
										<select name="Passing10thYear">
											
											<option value="10thPassing-year-2017">2017</option>
											<option value="10thPassing-year-2016">2016</option>
											<option value="10thPassing-year-2015">2015</option>
											<option value="10thPassing-year-2014">2014</option>
											<option value="10thPassing-year-2013">2013</option>
											<option value="10thPassing-year-2012">2012</option>
											<option value="10thPassing-year-2011">2011</option>
											<option value="10thPassing-year-2010">2010</option>
											<option value="10thPassing-year-2009">2009</option>
											<option value="10thPassing-year-2008">2008</option>
											<option value="10thPassing-year-2007">2007</option>
											<option value="10thPassing-year-2006">2006</option>
											<option value="10thPassing-year-2005">2005</option>
											<option value="10thPassing-year-2004">2004</option>
											<option value="10thPassing-year-2003">2003</option>
											<option value="10thPassing-year-2002">2002</option>
											<option value="10thPassing-year-2001">2001</option>
											<option value="10thPassing-year-2000">2000</option>
											<option value="10thPassing-year-1999">1999</option>
											<option value="10thPassing-year-1998">1998</option>
											<option value="10thPassing-year-1997">1997</option>

										</select>
									</td>
								</tr>
							</table>
						</div>
							

				</div>
				<div class="InnerAppMainDiv1 Apph2">
					<div>
						<h3>XII/ Diploma Details</h3>
					</div>
					<div class="Innerdivtable1">
						<div  class="Innertable1 leftInnerdivtable1">
							<table>
								<tr>
									<td>School/Institution</td>
									<td><input type="text" name="thSchool12" required="required"></td>
								</tr>
								<tr>
									<td>Total Marks</td>
									<td><input type="Number" name="thmarks12" required="required"></td>
								</tr>
								<tr>
									<td>Group</td>
									<td>
										<select name="thGroup12">
											<option value="Science">Science</option>
											<option value="Commerce">Commerce</option>
											<option value="Arts">Arts</option>
											<option value="Echo-Science">Echo-Science</option>
											
										</select>
									</td>
								</tr>
								<tr>
									<td>Physics Marks</td>
									<td><input type="Number" name="thPhysicsMarks12" required="required"></td>
								</tr>
								<tr>
									<td>Chemistry Marks</td>
									<td><input type="Number" name="thChemistryMarks12" required="required"></td>
								</tr>
								<tr>
									<td>Mathematics Marks</td>
									<td><input type="Number" name="thMathematicsMarks12" required="required"></td>
								</tr>
							</table>
						</div>
						<div  class="Innertable1 leftInnerdivtable1">
							<table>
								<tr>
									<td>Board/Council</td>
									<td><input type="text" name="thBoardCouncil12"></td>
								</tr>
								<tr>
									<td>Year of Passing</td>
									<td>
										<select name="thPassingYear12">
											<option value="12thPassing-year-2020">2020</option>
											<option value="12thPassing-year-2019">2019</option>
											<option value="12thPassing-year-2018">2018</option>
											<option value="12thPassing-year-2017">2017</option>
											<option value="12thPassing-year-2016">2016</option>
											<option value="12thPassing-year-2015">2015</option>
											<option value="12thPassing-year-2014">2014</option>
											<option value="12thPassing-year-2013">2013</option>
											<option value="12thPassing-year-2012">2012</option>
											<option value="12thPassing-year-2011">2011</option>
											<option value="12thPassing-year-2010">2010</option>
											<option value="12thPassing-year-2009">2009</option>
											<option value="12thPassing-year-2008">2008</option>
											<option value="12thPassing-year-2007">2007</option>
											<option value="12thPassing-year-2006">2006</option>
											<option value="12thPassing-year-2005">2005</option>
											<option value="12thPassing-year-2004">2004</option>
											<option value="12thPassing-year-2003">2003</option>
											<option value="12thPassing-year-2002">2002</option>
											<option value="12thPassing-year-2001">2001</option>
											<option value="12thPassing-year-2000">2000</option>
											

										</select>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="Submit">
					<input type="submit" value="Submit" name="">
				</div>
				</form>
				@endforeach
				
</div>
			</div>
		</div>
	</section>
	
	@endif

</body>
</html>

@endsection