@extends('DatabaseNew.DatabaseTemplate')
@section('content')
	<title>|| Database ||</title>
	<!-- Body Section -->
	<section class="DatabaseBodySection"> <!-- Width Height 100% But overflow is hidden Fix As Need -->
		<div class="DatabaseBodyPositon">
		<div class="FirstSectionP FirstSectionD">
			<h2>Welcome To Database</h2>
			<p>Manage College Data..Select From Bellow</p>
			<div class="Underline"></div>
		</div>
		<!-- StyleDemo1.css -->
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
		<div class="SearchSection">
			<div class="searchInput"><input type="" name=""></div>
			<div class="SearchB">Search</div>
		</div>
		<div class="SecondSectionP SecondSectionD">
			<div class="InsertDataP InsertDataD">
				<h1>Insert Data</h1>
			</div>
			<div class="BoxPosition">
				<div class="InnerBoxDesign">
					<div class="Logo">
						<img src="Css/NewDatabase/Image&Logo/StudentLogo.png">
					</div>
					<div class="Type">
						<p>Student</p>
					</div>
					<div class="ClickHere">
						<a  onclick="InsertStudent()">Click Here</a>
					</div>
				</div>
				<div class="InnerBoxDesign">
					<div class="Logo">
						<img src="Css/NewDatabase/Image&Logo/TeacherLogo1.png">
					</div>
					<div class="Type">
						<p>Teacher</p>
					</div>
					<div class="ClickHere">
						<a onclick="InsertTeacherr()">Click Here</a>
					</div>
				</div>
				<div class="InnerBoxDesign">
					<div class="Logo">
						<img src="Css/NewDatabase/Image&Logo/ClassAllot.png">
					</div>
					<div class="Type">
						<p>Class Alloted</p>
					</div>
					<div class="ClickHere">
						<a onclick="ClassAllotedd()">Click Here</a>
					</div>
				</div>
				<div class="InnerBoxDesign">
					<div class="Logo">
						<img src="Css/NewDatabase/Image&Logo/Employee.png">
					</div>
					<div class="Type">
						<p>Employee</p>
					</div>
					<div class="ClickHere">
						<a onclick="EmployeeeFunction()">Click Here</a>
					</div>
				</div>
			</div>
		</div>

		<div class="ThirdSectionP SecondSectionD">
			<div class="InsertDataP InsertDataD">
				<h1>View Data</h1>
			</div>
			<div class="BoxPosition">
				<div class="InnerBoxDesign">
					<div class="Logo">
						<img src="Css/NewDatabase/Image&Logo/StudentLogo.png">
					</div>
					<div class="Type">
						<p>Student</p>
					</div>
					<div class="ClickHere">
						<a href="/ViewStudent">Click Here</a>
					</div>
				</div>
				<div class="InnerBoxDesign">
					<div class="Logo">
						<img src="Css/NewDatabase/Image&Logo/TeacherLogo1.png">
					</div>
					<div class="Type">
						<p>Teacher</p>
					</div>
					<div class="ClickHere">
						<a href="/ViewTeacher">Click Here</a>
					</div>
				</div>
				<div class="InnerBoxDesign">
					<div class="Logo">
						<img src="Css/NewDatabase/Image&Logo/ClassAllot.png">
					</div>
					<div class="Type">
						<p>Class Alloted</p>
					</div>
					<div class="ClickHere">
						<a href="/ViewAlloted">Click Here</a>
					</div>
				</div>
				<div class="InnerBoxDesign">
					<div class="Logo">
						<img src="Css/NewDatabase/Image&Logo/Employee.png">
					</div>
					<div class="Type">
						<p>Employee</p>
					</div>
					<div class="ClickHere">
						<a href="/ViewEmployee">Click Here</a>
					</div>
				</div>
			</div>
		</div>


		<div class="FourthSectionp FourthSectionD">
			<div class="InnerDiv">
				<div class="InsertDataP1 InsertDataD">
				<h1>Student Portal</h1>
				</div>
				<div class="BoxPosition1">
				<div class="InnerBoxDesign">
					<div class="Logo">
						<img src="Css/NewDatabase/Image&Logo/Profile.png">
					</div>
					<div class="Type">
						<p>Profile</p>
					</div>
					<div class="ClickHere">
						<a href="/ProfilePotal">Click Here</a>
					</div>
					</div>
					<div class="InnerBoxDesign">
					<div class="Logo">
						<img src="Css/NewDatabase/Image&Logo/Form.png">
					</div>
					<div class="Type">
						<p>Application</p>
					</div>
					<div class="ClickHere">
						<a href="/ApplicationPotal">Click Here</a>
					</div>
					</div>
				</div>

			</div>
			<div class="InnerDiv1">
				<div class="InsertDataP2 InsertDataD">
				<h1>Online Application</h1>
				</div>
				<div class="BoxPosition2">
				<div class="InnerBoxDesign">
					<div class="Logo">
						<img src="Css/NewDatabase/Image&Logo/Profile.png">
					</div>
					<div class="Type">
						<p>Profile</p>
					</div>
					<div class="ClickHere">
						<a href="/ProfileAddmission">Click Here</a>
					</div>
					</div>
					<div class="InnerBoxDesign">
					<div class="Logo">
						<img src="Css/NewDatabase/Image&Logo/Form.png">
					</div>
					<div class="Type">
						<p>Application</p>
					</div>
					<div class="ClickHere">
						<a href="/ApplicationAddmission">Click Here</a>
					</div>
					</div>
				</div>
			</div>

		</div>
		</div>
	</section>





			<!-- End Of Body Section -->





			<!-- Body Section Insert Student, Teacher,Alloted etc Popup Applicaton Form -->



<!-- Insert Form Student -->



	<section class="DataStuInsSecP  AnimateDataForm DataStuInsSecD" id="InsertStudentId">

		<div class="InDataStuInsSec">
			<div class="Cross" onclick="InsertCurrentStudentCross()">
				<i class="fa fa-times" aria-hidden="true"></i>
			</div>
			<div class="FormLogo">

			</div>
			<div class="FormData">
				<!-- Heading -->
				<div class="HeadingP HeadingD">
					<h3>Personal Info</h3>
				</div>
				<div class="PositionForms SecondPartOfForm">
					<form method="post" enctype="multipart/form-data" action="{{route('NewStudent')}}">
						@csrf
						<div class="TableDesign">
						<table>
							<tr>
								<th>Full Name</th>
								<td><input type="text" name="FirstName" placeholder="FirstName" required="required"></td>
								<td><input type="text" name="lastName" placeholder="Last Name" required="required"></td>
							</tr>
							<tr>
								<th>Desired Course</th>
								<td>
									<select name="Course">
										<option value="BCA">BCA</option>
										<option value="BBA">BBA</option>
										<option value="MCA">MCA</option>
										<option value="BSC">BSC</option>

									</select>
								</td>
							</tr>
							<tr>
								<th>Address</th>
								<td class="Address"><input type="text" name="Address" required="required"></td>
							</tr>
							<tr>
								<th>District</th>
								<td><input type="text" name="District" required="required"></td>
							</tr>
						</table>
						</div>
					<div>

					</div>
					<div>

					</div>
				</div>
				<div class="PositionForms SecondPartOfForm">
					<div class="TableDesign">
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
								<th>Mobile</th>
								<td><input type="text" name="MobileNumber" required="required"></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><input type="Email" name="Email" required="required"></td>
							</tr>

						</table>
					</div>
					<div class="TableDesign">
						<table>
							<tr>
								<th>State</th>
								<td><input type="text" name="State" required="required"></td>
							</tr>
							<tr>
								<th>Date Of Birth</th>
								<td><input type="date" name="DateOfBirth" required="required"></td>
							</tr>
							<tr>
								<th>Upload Image</th>
								<td><input type="file" name="StudentImg" required="required"></td>
							</tr>
						</table>
					</div>
					<div>
						<table>

						</table>
					</div>
				</div>
				<!-- Heading -->
				<div class="HeadingP1 HeadingD">
					<h3>Parent's Detail</h3>
				</div>
				<div class="PositionForms SecondPartOfForm">
					<div class="TableDesign">
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
								<td><input type="Number" name="ParentNumber" required="required"></td>
							</tr>
							<tr>
								<th>Parent's Income</th>
								<td>
									<select name="FamilyIncome">
										<option>Less Then 100000</option>
										<option>100000-200000</option>
										<option>100000-300000</option>
										<option>100000-400000</option>
										<option>More Than 500000</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
					<div class="TableDesign">
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
								<th>Parent's Email</th>
								<td><input type="text" name="ParentEmail" required="required"></td>
							</tr>
						</table>
					</div>
					<div>
						<table>

						</table>
					</div>
				</div>
				<!-- Heading -->
				<div class="HeadingP1 HeadingD">
					<h3>Class X Detail</h3>
				</div>

				<div class="PositionForms SecondPartOfForm">
					<div class="TableDesign">
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


				<!-- Heading -->
				<div class="HeadingP1 HeadingD">
					<h3>Class X Detail</h3>
				</div>
				<div class="PositionForms SecondPartOfForm">
					<div class="TableDesign">
						<table>
								<tr>
									<th>School/Institution</th>
									<td><input type="text" name="thSchool12" required="required"></td>
								</tr>
								<tr>
									<th>Total Marks</th>
									<td><input type="Number" name="thmarks12" required="required"></td>
								</tr>
								<tr>
									<th>Group</th>
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
									<th>Physics Marks</th>
									<td><input type="Number" name="thPhysicsMarks12" required="required"></td>
								</tr>
								<tr>
									<th>Chemistry Marks</th>
									<td><input type="Number" name="thChemistryMarks12" required="required"></td>
								</tr>
								<tr>
									<th>Mathematics Marks</th>
									<td><input type="Number" name="thMathematicsMarks12" required="required"></td>
								</tr>
							</table>
					</div>
					<div class="TableDesign">
						<table>
								<tr>
									<th>Board/Council</th>
									<td><input type="text" name="thBoardCouncil12" required="required"></td>
								</tr>
								<tr>
									<th>Year of Passing</th>
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
					<div>

					</div>
				</div>
				<div class="SubmitDesign">
					<input type="submit" value="Submit" name="">
				</div>
				</form>
			</div>
		</div>
	</section>

	<!-- End Of Insert Student -->


<!-- Insert Teacher Section -->



	<section class="DataStuInsSecP AnimateDataForm DataTeacherInsSecD"	id="InsertTeacherId" >

		<div class="InDataTeacherInsSec">
			<div class="Cross AnimateDataForm" onclick="InsertTeacherCross()">
				<i class="fa fa-times" aria-hidden="true"></i>
			</div>
			<div class="FormLogo">

			</div>
			<div class="FormData">
				<!-- Heading -->
				<div class="HeadingP HeadingD">
					<h3>Personal Info</h3>
				</div>
				<div class="PositionForms SecondPartOfForm">
					<form method="post" enctype="multipart/form-data" action="{{route('NewTeacher')}}">
						@csrf
						<div class="TableDesign">
						<table>
							<tr>
								<th>Full Name</th>
								<td><input type="text" name="TeacherFirstname" placeholder="FirstName"></td>
								<td><input type="text" name="TeacherLastname" placeholder="Last Name"></td>
							</tr>
							<tr>
								<th>Address</th>
								<td class="Address"><input type="" name="TeacherAddress"></td>
							</tr>
							<tr>
								<th>District</th>
								<td><input type="text" name="TeacherDistrict"></td>
							</tr>
						</table>
						</div>
					<div>

					</div>
					<div>

					</div>
				</div>
				<div class="PositionForms SecondPartOfForm">
					<div class="TableDesign">
						<table>
							<tr>
							<th>Gender</th>
							<td>
								<select name="TeacherGender">
									<option>Male</option>
									<option>Female</option>
								</select>
							</td>
							</tr>
							<tr>
								<th>Landline</th>
								<td><input type="text" name="TeacherLandlineNo"></td>
							</tr>
							<tr>
								<th>Mobile</th>
								<td><input type="text" name="TeacherMobileNumber"></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><input type="text" name="TeacherEmail"></td>
							</tr>

						</table>
					</div>
					<div class="TableDesign">
						<table>
							<tr>
								<th>State</th>
								<td><input type="text" name="TeacherState"></td>
							</tr>
							<tr>
								<th>Date Of Birth</th>
								<td><input type="text" name="TeacherDateOfBirth"></td>
							</tr>
							<tr>
								<th>Upload Image</th>
								<td><input type="file" name="TeacherImage"></td>
							</tr>

						</table>
					</div>
					<div>
						<table>

						</table>
					</div>
				</div>
				<div class="HeadingP HeadingD">
					<h3>Education</h3>
				</div>
				<div class="PositionForms SecondPartOfForm">

						<div class="TableDesign">
							<table>
								<tr>
									<th>Degree 1</th>
									<td><input type="" name="TeacherDegreeOne"></td>
								</tr>
								<tr>
									<th>Degree 2</th>
									<td><input type="" name="TeacherDegreeTwo"></td>
								</tr>
								<tr>
									<th>Degree 3</th>
									<td><input type="" name="TeacherDegreeThree"></td>
								</tr>
							</table>
						</div>
								<div class="TableDesign">
								<table>
								<tr>
									<th>Experience Year 1</th>
									<td><input type="number" name="TeacherExprienceOne"></td>
								</tr>
								<tr>
									<th>Company Name</th>
									<td><input type="text" name="TeacherCompanyNameOne"></td>
								</tr>
								<tr>
									<th>Position</th>
									<td><input type="text" name="TeacherPositionOne"></td>
								</tr><tr>
									<th>Experience Year 2</th>
									<td><input type="number" name="TeacherExpriencetwo"></td>
								</tr>
								<tr>
									<th>Company Name</th>
									<td><input type="text" name="TeacherCompanyNametwo"></td>
								</tr>
								<tr>
									<th>Position</th>
									<td><input type="text" name="TeacherPositiontwo"></td>
								</tr>
							</table>
						</div>
						<div>

						</div>
						<div>

						</div>


		</div>
		<div class="HeadingP HeadingD">
					<h3>Others</h3>
				</div>
				<div class="PositionForms SecondPartOfForm">

						<div class="TableDesign">
							<table>
								<tr>
									<th>Subject 1</th>
									<td>
										<select name="TeacherSubjectOne">
											<option>Math</option>
											<option>Math</option>
											<option>Math</option>
											<option>Math</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>Subject 2</th>
									<td>
										<select name="TeacherSubjectTwo">
											<option>Math</option>
											<option>Math</option>
											<option>Math</option>
											<option>Math</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>Subject 3</th>
									<td>
										<select name="TeacherSubjectThree">
											<option>Math</option>
											<option>Math</option>
											<option>Math</option>
											<option>Math</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>Subject 4</th>
									<td>
										<select name="TeacherSubjectFour">
											<option>Math</option>
											<option>Math</option>
											<option>Math</option>
											<option>Math</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>Position</th>
									<td><input type="text" name="TeacherCollegePosition" placeholder="College Position"></td>
								</tr>
							</table>
						</div>
						<div class="TableDesign">
							<table>
								<tr>
									<th>Other Activites 1</th>
									<td><input type="text" name="TeacherOtherActOne"></td>
								</tr>
								<tr>
									<th>Other Activites 2</th>
									<td><input type="text" name="TeacherOtherActTwo"></td>
								</tr>
								<tr>
									<th>Attact file 1</th>
									<td><input type="file" name="TeacherAtFileOne"></td>
								</tr>
								<tr>
									<th>Attact file 2</th>
									<td><input type="file" name="TeacherAtFileTwo"></td>
								</tr>
							</table>
						</div>
						<div>

						</div>
						<div>

						</div>
				</div>
				<div class="SubmitDesign">
					<input type="submit" value="Submit" name="">
				</div>
	</section>
</form>

<!-- End Insert Teacher Section -->



<!-- Class Alloted Insert Section -->

	<section class="DataStuInsSecP AnimateDataForm DataTeacherInsSecD"	id="AllotIdDatabseSection" >

		<div class="InDataAllotedInsSec">
			<div class="Cross AnimateDataForm" onclick="ClassAllotedCross()">
				<i class="fa fa-times" aria-hidden="true"></i>
			</div>
			<div class="FormLogo">

			</div>
				<form method="post" enctype="multipart/form-data" action="{{route('AllotedDataInsert')}}">
					@csrf
			<div class="FormData1">
				<div class="innerFormData1">
					<div class="HeadingAlloted">
						<h3>Class Alloted </h3>
					</div>
					<div class="AllotedForm AllotedFormDesign">

							<table class="AllotedTable">
							<tr>
								<th>Teacher Name</th>
							</tr>

							<tr>
								<td>
									<select name="ATName">
										@if(Session::get('TeacherProfile'))
										@foreach(Session::get('TeacherProfile') as $test)

										<option value="{{$test->TeacherFirstname}}">{{$test->TeacherFirstname}}</option><!--  Data Gonna Fetch From Database -->
										@endforeach
										@endif
									</select>
								</td>
							</tr>

							<tr>
								<th>Choose Subject</th>
							</tr>
							<tr>
								<td>
									<select name="ASub">
										<option value="Php">PhP</option>
										<option value="Java">Java</option>
										<option value="C+">C++</option>
										<option value="Linux">Linux</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>
									Semister
								</th>
							</tr>
							<tr>
								<td>
									<select name="ASem">
										<option value="1st">1st</option>
										<option value="2nd">2nd</option>
										<option value="3rd">3rd</option>
										<option value="4th">4th</option>
										<option value="5th">5th</option>
										<option value="6th">6th</option>
										<option value="7th">7th</option>
										<option value="8th">8th</option>
									</select>
								</td>
							</tr>
							<tr>
								<th>Duration From</th>
							</tr>
							<tr>
								<td><input type="date" name="AStartDate"></td>
							</tr>
							<tr>
								<th>From</th>
							</tr>
							<tr>
								<td><input type="date" name="AEnddata"></td>
							</tr>
							</table>


					</div>
					<div class="SubmitBtn">
						<input type="submit" value="Submit">
					</div>
				</div>
			</div>
		</div>
	</section>
	</form>



<!-- End Alloted Section -->




<!-- Employee Data Insert Form -->

	<section class="DataStuInsSecP AnimateDataForm DataTeacherInsSecD" id="EmployeeInsertId" >

		<div class="InDataTeacherInsSec">
			<div class="Cross AnimateDataForm" onclick="InsertEmoplyeeCross()">
				<i class="fa fa-times" aria-hidden="true"></i>
			</div>
			<div class="FormLogo">

			</div>
			<div class="FormData">
				<!-- Heading -->
				<div class="HeadingP HeadingD">
					<h3>Personal Info</h3>
				</div>
				<div class="PositionForms SecondPartOfForm">
					 <form method="post" enctype="multipart/form-data" action="{{route('EmployeDataInsert')}}">
						@csrf
						<div class="TableDesign">
						<table>
							<tr>
								<th>Full Name</th>
								<td><input type="text" name="EmployeFirstname" placeholder="FirstName"></td>
								<td><input type="text" name="EmployeLastname" placeholder="Last Name"></td>
							</tr>
							<tr>
								<th>Address</th>
								<td class="Address"><input type="text" name="EmployeAddress"></td>
							</tr>
							<tr>
								<th>District</th>
								<td><input type="text" name="EmployeDistrict"></td>
							</tr>
						</table>
						</div>
					<div>

					</div>
					<div>

					</div>
				</div>
				<div class="PositionForms SecondPartOfForm">
					<div class="TableDesign">
						<table>
							<tr>
							<th>Gender</th>
							<td>
								<select name="EmployeGender">
									<option>Male</option>
									<option>Female</option>
								</select>
							</td>
							</tr>
							<tr>
								<th>Landline</th>
								<td><input type="number" name="EmployeLandlineNo"></td>
							</tr>
							<tr>
								<th>Mobile</th>
								<td><input type="number" name="EmployeMobileNumber"></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><input type="Email" name="EmployeEmail"></td>
							</tr>

						</table>
					</div>
					<div class="TableDesign">
						<table>
							<tr>
								<th>State</th>
								<td><input type="text" name="EmployeState"></td>
							</tr>
							<tr>
								<th>Date Of Birth</th>
								<td><input type="date" name="EmployeDateOfBirth"></td>
							</tr>
							<tr>
								<th>Upload Image</th>
								<td><input type="file" name="EmployeImage"></td>
							</tr>

						</table>
					</div>
					<div>
						<table>

						</table>
					</div>
				</div>
				<div class="HeadingP HeadingD">
					<h3>Education</h3>
				</div>
				<div class="PositionForms SecondPartOfForm">

						<div class="TableDesign">
							<table>
								<tr>
									<th>Education Qualification</th>
									<td><input type="text" name="EmployeEduQualification" placeholder="10th-Board/12th-Board"></td>
								</tr>
								<tr>
									<th>Degree 1</th>
									<td><input type="text" name="EmployeDegOne"></td>
								</tr>
								<tr>
									<th>Degree 2</th>
									<td><input type="text" name="EmployeDegTwo"></td>
								</tr>
							</table>
						</div>
								<div class="TableDesign">
								<table>
								<tr>
									<th>Experience Year 1</th>
									<td><input type="number" name="EmployeExprienceOne"></td>
								</tr>
								<tr>
									<th>Company Name</th>
									<td><input type="text" name="EmployeCompanyNameOne"></td>
								</tr>
								<tr>
									<th>Position</th>
									<td><input type="text" name="EmployePositionOne"></td>
								</tr><tr>
									<th>Experience Year 2</th>
									<td><input type="text" name="EmployeExpriencetwo"></td>
								</tr>
								<tr>
									<th>Company Name</th>
									<td><input type="text" name="EmployeCompanyNametwo"></td>
								</tr>
								<tr>
									<th>Position</th>
									<td><input type="text" name="EmployePositiontwo"></td>
								</tr>
							</table>
						</div>
						<div>

						</div>
						<div>

						</div>


		</div>
		<div class="HeadingP HeadingD">
					<h3>Others</h3>
				</div>
				<div class="PositionForms SecondPartOfForm">

						<div class="TableDesign">
							<table>
								<tr>
									<th>Job Position</th>
									<td><input type="text" name="EmployeJobPosition"></td>
								</tr>
							</table>
						</div>
						<div class="TableDesign">
							<table>
								<tr>
									<th>Other Activites 1</th>
									<td><input type="text" name="EmployeOtherActOne"></td>
								</tr>
								<tr>
									<th>Other Activites 2</th>
									<td><input type="text" name="EmployeOtherActTwo"></td>
								</tr>
								<tr>
									<th>Attact file 1</th>
									<td><input type="file" name="EmployeAtFileOne"></td>
								</tr>
							</table>
						</div>
						<div>

						</div>
						<div>

						</div>
				</div>
				<div class="SubmitDesign">
					<input type="submit" value="Submit" name="">
				</div>
	</section>



		<!-- End Employee Section  -->



@endSection
