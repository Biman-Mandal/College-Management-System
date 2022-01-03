<title>Student Portal</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/Portal/portal.css')}}">
<nav  class="navbar navbar-expand-lg navbar-dark bg-dark newNav">
    <style type="text/css">
        .align-item{
            font-size: 25px;
            font-weight: bold;
            margin: 0 auto;
        }
    </style>
    <span class="navbar-brand mb-0 h1 align-item">Registration Form</span>
    <button type="button" class="btn btn-primary">Logout</button>
</nav>
<div class="container centerContainer" >
    <form class="form-horizontal" method="post" action="{{ url('portal-data-registrations') }}">
        @csrf
        <fieldset>

            <h2><center>Personal Details</center></h2>

            <div class="form-group">
                <label for="inputName" class="col-lg-2 control-label">First Name</label>
                <div class="col-lg-6">
                    <input type="text" name="FirstName" class="form-control" id="inputName" placeholder="First Name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputName" class="col-lg-2 control-label">Last Name</label>
                <div class="col-lg-6">
                    <input type="text" name="lastName" class="form-control" id="inputName" placeholder="Last Name" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">Gender</label>
                <div class="col-lg-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" id="optionsRadios1" value="Male" checked="">
                            Male
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" id="optionsRadios2" value="Female" checked="">
                            Female
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" id="optionsRadios3" value="Others" checked="">
                            Others
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inputMobile" class="col-lg-2 control-label">Mobile1</label>
                <div class="col-lg-6">
                    <input type="text" name="mobile1" class="form-control" id="inputMobile" placeholder="Mobile" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputMobile" class="col-lg-2 control-label">Mobile2</label>
                <div class="col-lg-6">
                    <input type="text" name="mobile2" class="form-control" id="inputMobile" placeholder="Mobile" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email1</label>
                <div class="col-lg-6">
                    <input type="text" name="Email1" class="form-control" id="inputEmail" placeholder="Email 1" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email2</label>
                <div class="col-lg-6">
                    <input type="text" name="Email2" class="form-control" id="inputEmail" placeholder="Email 2">
                </div>
            </div>

            <div class="form-group">
                <label for="inputBGroup" class="col-lg-2 control-label">Blood Group</label>
                <div class="col-lg-6">
                    <input type="text" name="blgroup" class="form-control" id="inputBGroup" placeholder="Blood-group" required>
                </div>
            </div>


            <h2><center>Identity Details</center></h2>
            <div class="form-group">
                <label for="inputADHAR" class="col-lg-2 control-label">ADHAR Number</label>
                <div class="col-lg-6">
                    <input type="text" name="adharnum" class="form-control" id="inputADHAR" placeholder="adharnumber" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPan" class="col-lg-2 control-label">Pan Number</label>
                <div class="col-lg-6">
                    <input type="text" name="pannum" class="form-control" id="inputPan" placeholder="pannumber" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassport" class="col-lg-2 control-label">Passport Number</label>
                <div class="col-lg-6">
                    <input type="text" name="passport" class="form-control" id="inputPassport" placeholder="passport" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputFather" class="col-lg-2 control-label">Father's Name</label>
                <div class="col-lg-6">
                    <input type="text" name="fathername" class="form-control" id="inputFather" placeholder="father's-name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputOccupation" class="col-lg-2 control-label">Occupation</label>
                <div class="col-lg-6">
                    <input type="text" name="occupation" class="form-control" id="inputOccupation" placeholder="occupation" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputContact" class="col-lg-2 control-label">Gurdian's Contact Number</label>
                <div class="col-lg-6">
                    <input type="text" name="contact" class="form-control" id="inputContact" placeholder="contact-number" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputRelation" class="col-lg-2 control-label">Relation with Gurdian</label>
                <div class="col-lg-6">
                    <input type="text" name="relation" class="form-control" id="inputRelation" placeholder="relation" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputMother" class="col-lg-2 control-label">Mother's Name</label>
                <div class="col-lg-6">
                    <input type="text" name="mothername" class="form-control" id="inputMother" placeholder="mother's-name"  required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputOccupation" class="col-lg-2 control-label">Occupation</label>
                <div class="col-lg-6">
                    <input type="text" name="Moccupation" class="form-control" id="inputOccupation" placeholder="occupation" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputAddress" class="col-lg-2 control-label">Permanent Address</label>
                <div class="col-lg-6">
                    <textarea required class="form-control" name="Faaddress" rows="0" cols="50" id="textArea"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="inputP.O." class="col-lg-2 control-label">P.O.</label>
                <div class="col-lg-6">
                    <input type="text" name="PO" class="form-control" id="inputPO" placeholder="p.o." required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputCityVill" class="col-lg-2 control-label">City/Village</label>
                <div class="col-lg-6">
                    <input type="text" name="cityvill" class="form-control" id="inputCityVill" placeholder="city/vill" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPincode" class="col-lg-2 control-label">Pincode</label>
                <div class="col-lg-6">
                    <input type="text" name="pincode" class="form-control" id="inputPincode" placeholder="pincode" required>
                </div>
            </div>

            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">State</label>
                <div class="col-lg-6">
                    <select class="form-control" name="country" id="slect">
                        <option></option>
                        <option>Andhra Pradesh</option>
                        <option>Arunachal Pradesh</option>
                        <option>Assam</option>
                        <option>Bihar</option>
                        <option>Chhattisgarh</option>
                        <option>Goa</option>
                        <option>Gujarat</option>
                        <option>Haryana</option>
                        <option>Himachal Pradesh</option>
                        <option>Jharkhand</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                        <option>Madhya Pradesh</option>
                        <option>Maharashtra</option>
                        <option>Manipur</option>
                        <option>Meghalaya</option>
                        <option>Mizoram</option>
                        <option>Nagaland</option>
                        <option>Odisha</option>
                        <option>Punjab</option>
                        <option>Rajasthan</option>
                        <option>Sikkim</option>
                        <option>Tamil Nadu</option>
                        <option>Telangana</option>
                        <option>Tripura</option>
                        <option>Uttar Pradesh</option>
                        <option>Uttarakhand</option>
                        <option>West Bengal</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputAddress" class="col-lg-2 control-label">Permanent Address</label>
                <div class="col-lg-6">
                    <textarea class="form-control" name="Permanentaddress" rows="3" id="textArea"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="inputP.O." class="col-lg-2 control-label">P.O.</label>
                <div class="col-lg-6">
                    <input type="text" name="POO" class="form-control" id="inputPO" placeholder="p.o." required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputCityVill" class="col-lg-2 control-label">City/Village</label>
                <div class="col-lg-6">
                    <input type="text" name="Percityvill" class="form-control" id="inputCityVill" placeholder="city/vill" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPincode" class="col-lg-2 control-label">Pincode</label>
                <div class="col-lg-6">
                    <input type="text" name="Perpincode" class="form-control" id="inputPincode" placeholder="pincode" required>
                </div>
            </div>

            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">State</label>
                <div class="col-lg-6">
                    <select class="form-control" name="Percountry" id="slect">
                        <option></option>
                        <option>Andhra Pradesh</option>
                        <option>Arunachal Pradesh</option>
                        <option>Assam</option>
                        <option>Bihar</option>
                        <option>Chhattisgarh</option>
                        <option>Goa</option>
                        <option>Gujarat</option>
                        <option>Haryana</option>
                        <option>Himachal Pradesh</option>
                        <option>Jharkhand</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                        <option>Madhya Pradesh</option>
                        <option>Maharashtra</option>
                        <option>Manipur</option>
                        <option>Meghalaya</option>
                        <option>Mizoram</option>
                        <option>Nagaland</option>
                        <option>Odisha</option>
                        <option>Punjab</option>
                        <option>Rajasthan</option>
                        <option>Sikkim</option>
                        <option>Tamil Nadu</option>
                        <option>Telangana</option>
                        <option>Tripura</option>
                        <option>Uttar Pradesh</option>
                        <option>Uttarakhand</option>
                        <option>West Bengal</option>
                    </select>
                </div>
            </div>

            <h2><center>Academics</center></h2>
            <h3>Class X Details :</h3>
            <div class="form-group">
                <label for="inputExamination" class="col-lg-3 control-label">Name of the Examination</label>
                <div class="col-lg-6">
                    <input type="text" name="Xexamination" class="form-control" id="inputExamination" placeholder="examination" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassing" class="col-lg-2 control-label">Year of Passing</label>
                <div class="col-lg-6">
                    <input type="text" name="Xpassing" class="form-control" id="inputPassing" placeholder="year of passing" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputStandard" class="col-lg-2 control-label">Standard %</label>
                <div class="col-lg-6">
                    <input type="text" name="Xstandard" class="form-control" id="inputStandard" placeholder="standard" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputActual" class="col-lg-2 control-label">Actual %</label>
                <div class="col-lg-6">
                    <input type="text" name="Xactual" class="form-control" id="inputActual" placeholder="actual" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputBoardCouncil" class="col-lg-2 control-label">Board / Council</label>
                <div class="col-lg-6">
                    <input type="text" name="Xboardcouncil" class="form-control" id="inputBoardCouncil" placeholder="board / council" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputStudy" class="col-lg-2 control-label">Medium of Study</label>
                <div class="col-lg-6">
                    <input type="text" name="Xstudy" class="form-control" id="inputStudy" placeholder="medium of study" required>
                </div>
            </div>

            <h3>Class X Other Academic Details :</h3>
            <div class="form-group">
                <label for="inputMath" class="col-lg-4 control-label">Class X Math %</label>
                <div class="col-lg-6">
                    <input type="text" name="Xmath" class="form-control" id="inputMath" placeholder="math %" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputScience" class="col-lg-4 control-label">Class X Science{(PHY+CHEM+BIO)/3} %</label>
                <div class="col-lg-6">
                    <input type="text" name="Xscience" class="form-control" id="inputScience" placeholder="science %" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputComputer" class="col-lg-5 control-label">Class X Computer Application %</label>
                <div class="col-lg-6">
                    <input type="text" name="Xcomapp" class="form-control" id="inputComputer" placeholder="computer application %" required>
                </div>
            </div>

            <h3>Class XII Details :</h3>
            <div class="form-group">
                <label for="inputExamination" class="col-lg-3 control-label">Name of the Examination</label>
                <div class="col-lg-6">
                    <input type="text" name="XIIexamination" class="form-control" id="inputExamination" placeholder="examination"required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassing" class="col-lg-2 control-label">Year of Passing</label>
                <div class="col-lg-6">
                    <input type="text" name="XIIpassing" class="form-control" id="inputPassing" placeholder="year of passing"required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputStandard" class="col-lg-2 control-label">Standard %</label>
                <div class="col-lg-6">
                    <input type="text" name="XIIstandard" class="form-control" id="inputStandard" placeholder="standard"required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputActual" class="col-lg-2 control-label">Actual %</label>
                <div class="col-lg-6">
                    <input type="text" name="XIIactual" class="form-control" id="inputActual" placeholder="actual"required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputBoardCouncil" class="col-lg-2 control-label">Board / Council</label>
                <div class="col-lg-6">
                    <input type="text" name="XIIboardcouncil" class="form-control" id="inputBoardCouncil" placeholder="board / council"required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputStudy" class="col-lg-2 control-label">Medium of Study</label>
                <div class="col-lg-6">
                    <input type="text" name="XIIstudy" class="form-control" id="inputStudy" placeholder="medium of study"required>
                </div>
            </div>

            <h3>Class XII Other Academic Details :</h3>

            <div class="form-group">
                <label for="inputMath" class="col-lg-4 control-label">Class XII Math %</label>
                <div class="col-lg-6">
                    <input type="text" name="XIImath" class="form-control" id="inputMath" placeholder="math %"required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPhysics" class="col-lg-4 control-label">Class XII Physics %</label>
                <div class="col-lg-6">
                    <input type="text" name="XIIphysics" class="form-control" id="inputPhysics" placeholder="physics %"required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputChemistry" class="col-lg-5 control-label">Class X Chemistry %</label>
                <div class="col-lg-6">
                    <input type="text" name="XIIchemistry" class="form-control" id="inputChemistry" placeholder="chemistry %"required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputComputer" class="col-lg-6 control-label">Class XII Computer App. / Sc. %</label>
                <div class="col-lg-6">
                    <input type="text" name="XIIcompapp" class="form-control" id="inputComputer" placeholder="computer app. / sc. %"required>
                </div>
            </div>

            <h3>BCA Details :</h3>
            <div class="form-group">
                <label for="inputExamination" class="col-lg-3 control-label">Entrance examination name</label>
                <div class="col-lg-6">
                    <input type="text" name="BCAexamination" class="form-control" id="inputExamination" placeholder="entrance examination name"required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputRank" class="col-lg-2 control-label">Rank</label>
                <div class="col-lg-6">
                    <input type="number" name="BCArank" class="form-control" id="inputRank" placeholder="rank"required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputRegistration" class="col-lg-3 control-label">University Registration no.</label>
                <div class="col-lg-6">
                    <input type="text" name="BCAregistration" class="form-control" id="inputRegistration" placeholder="registration no." required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputRoll" class="col-lg-3 control-label">University Roll no.</label>
                <div class="col-lg-6">
                    <input type="text" name="BCAroll" class="form-control" id="inputRoll" placeholder="roll no." required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputSemister" class="col-lg-2 control-label">Sem 1</label>
                <div class="col-lg-6">
                    <input type="text" name="BCAsemister1" class="form-control" id="inputSemister" placeholder="sem 1" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputSemister" class="col-lg-2 control-label">Sem 2</label>
                <div class="col-lg-6">
                    <input type="text" name="BCAsemister2" class="form-control" id="inputSemister" placeholder="sem 2" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputSemister" class="col-lg-2 control-label">Sem 3</label>
                <div class="col-lg-6">
                    <input type="text" name="BCAsemister3" class="form-control" id="inputSemister" placeholder="sem 3" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputSemister" class="col-lg-2 control-label">Sem 4</label>
                <div class="col-lg-6">
                    <input type="text" name="BCAsemister4" class="form-control" id="inputSemister" placeholder="sem 4" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputSemister" class="col-lg-2 control-label">Sem 5</label>
                <div class="col-lg-6">
                    <input type="text" name="BCAsemister5" class="form-control" id="inputSemister" placeholder="sem 5" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputSemister" class="col-lg-2 control-label">Sem 6</label>
                <div class="col-lg-6">
                    <input type="text" name="BCAsemister6" class="form-control" id="inputSemister" placeholder="sem 6" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputAverage" class="col-lg-2 control-label">Average</label>
                <div class="col-lg-6">
                    <input type="text" name="BCAaverage" class="form-control" id="inputAverage" placeholder="average" required >
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-4 control-label">Any backlog during BCA?</label>
                <div class="col-lg-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="BCAbacklogY" id="optionsRadios1" value="option1" checked="">
                            Yes
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="BCAbacklogN" id="optionsRadios2" value="option2" checked="">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inputAverage" class="col-lg-2 control-label">Subject Name</label>
                <div class="col-lg-6">
                    <input type="text" name="BCAbacklogName" class="form-control" id="inputAverage" placeholder="subject-name" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
