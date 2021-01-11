<!DOCTYPE html>
<html>
<head>
	
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/Home/style2.css')}}">
 <link rel="stylesheet" type="text/css" href="{{ asset('css/Database/databse.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/Home/header1.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/Home/new.css')}}">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body onload="OpaningLoad()">
  <!--Preload Function Css in database/database.css js in SIdeNavbar.js -->
  <div id="loading"></div>
  <!--///////////////// Section1(database.css)//////////////////-->
  <section class="section1">
    <div class="sectionOneLeft">
      <h5 style="color: white;"><i style="color: skyblue;" class="fa fa-phone-square" aria-hidden="true"></i>9876543210</h5>
      <h5><a style="text-decoration: none; color: white;" href="#"><i style="color: #30ad24;" class="fa fa-android" aria-hidden="true"></i>Download App</a></h5>
    </div>
    <div class="sectionOneRight">
    <h3><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></h3>
    <h3><a  href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></h3>
    <h3><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></h3>
    <h3 ><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></h3>
    </div>
  </section>
  <div class="br"></div>
  <!-- //////////////////////////////////DatabasePopup home/new.css -->
  <form method="post" action="{{route('DatabaseInsert')}}">
    @csrf
  <div id="DatabaseLoginPopup">
    <div class="innerDatabaseLoginPopup animate">
      <div class="DatabaseLoginCross" onclick="DatabaseCross()">
      <i class="fa fa-times" aria-hidden="true"></i>
    </div>
      <div class="TopDiv">
        <h2>Admin Login</h2>
        <p>Enter Username And Password</p>
      </div>
      <div class="MiddleDiv">
        <div class="MiddleDivInput">
          <input type="text" name="DatabaseUsername" required>
          <label class="label1"><i class="fa fa-user" aria-hidden="true"></i></label>
          <label class="label2">Username</label>
        </div>
        <div class="MiddleDivInput">
          <input type="Password" name="DatabasePassword" required>
          <label class="label1"><i class="fa fa-key" aria-hidden="true"></i></label>
          <label class="label2">Password</label>
        </div> 
        <div class="ThirdDiv">
        <input type="submit" value="Submit">
      </div>      
      </div>
      
    </div>
    </div>
  </form>
    
  
   <!--///////////////////////////// Section2(header1.css)//////////////////////////-->

<section class="sectionTwo">
  <div class="sectionTwoLeft">
    <h3><img src="css/photos/tih.jpg"/></h3>
    <h3 class="technoLogo"><a href="/">TECHNO INDIA HOOGHLY</a></h3>
  </div>
  <div class="sectionTwoRight">
     <h5><a href="/StudentPotal" target="_blank"><i class="fa fa-user" aria-hidden="true"></i>Student Portal</a></h5>
     <!-- href="/Database" -->
     <h5 style="cursor: pointer;"><a onclick="DatabaseLogin()"><i class="fa fa-id-card-o" aria-hidden="true"></i>Database</a></h5>
     <h5><a href="#"><i class="fa fa-id-card-o" aria-hidden="true"></i>Generate Id</a></h5>
     <h5><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Semester Result</a></h5>
  </div>
 <div class="SectionTwoResIcon">
   <span onclick="SideNavbar()"><i class="fa fa-bars" aria-hidden="true"></i></span>
 </div>
<!-- Css/Database.css-->
<div id="TopSideNav">

  <div class="SideNav">

    <div class="SideavCross"><span onclick="RemoveNavbar()"><i class="fa fa-times" aria-hidden="true"></i></span></div>
      <a href="/">Home</a>
      <a onclick="Academics()" class="AcademicsDrop" href="#">Academics</a>
      <div id="dropdownSidebar">
        <a href="#">Units</a>
        <a href="#">Syllabus</a>
        <a href="#">Hollidays</a>
        <a href="#">ClassRoutine</a>
      </div>
      <a href="#" onclick="Academics1()" class="AcademicsDrop">Addmission</a>
      <div id="dropdownSidebar1">
        <a href="#" onclick="Academics2()" class="AcademicsDrop1">Mode</a>
        <div id="dropdownSidebar2">
          <a href="#">Offline</a>
          <a href="#">Online</a>
        </div>
        <a href="#">FeeStructure</a>
        <a href="#">Instraction</a>

      </div>
      <a href="#">Training&Placement</a>
      <a href="/Principal">Principal's Desk</a>
      <a href="/AboutPage">About Us</a>
  </div>
</div>
</section>
<!-- Css/Database.css-->
<div class="br"></div>
<div class="Section3Navbar">
  <div class="innerSection3Navbar">
  <nav class="NavbarRes">
      <ul>
           <li><a href="/">Home</a></li>
           <li><a href="#">Academics</a>
              <ul>
                <li><a href="#">Units<span class="fa fa-chevron-circle-right fa-right"></span></a>        
                    <ul>
                        <li><a href="#">BCA</a></li>
                        <li><a href="#">BBA</a></li>
                        <li><a href="#">BSE</a></li>
                        <li><a href="#">MCA</a></li>
                    </ul>
                </li>
                <li><a href="#">Syllabus</a></li>
                <li><a href="#">Hollidays</a></li>
                <li><a href="#">ClassRoutine</a></li>
              </ul>
          </li>
        <li><a href="#">Addmission</a>
          <ul>
            <li><a href="#">Mode<span class="fa fa-chevron-circle-right fa-right"></span></a>
                <ul>
                    <li><a href="#">Online</a></li>
                    <li><a href="#">Offline</a></li>
                </ul>
            </li>
            <li><a href="#">FeeStructure</a></li>
            <li><a href="#">Instraction</a></li>
          </ul>
       </li>
        <li><a href="#">Training&Placement</a></li>
        <li><a href="/Principal">Principal's Desk</a></li>
        <li><a href="/AboutPage">About Us</a></li>
        
   </ul>
</nav>
</div>

</div>

<!-- 
<div class="middle">
      <button class="btn btn1"><i class="fa fa-book" aria-hidden="true"></i>Apply</button>
    </div>

-->
</div>



@yield('content')



</body>



<div  class="home1_footer" >

  <div class="Home1_inner_footer">
    <div class="home1_footer_items">
      <h1>Techno India Hooghly</h1>
       <div class="Home1_border"> </div>
      <p >
        <br>

Techno India Hooghly, best MCA college in West Bengal. Techno India Hooghly is awarwaded as the Best MCA College in West Bengal as well as in India.
      </p>
    </div>
    <div class="home1_footer_items">
      <h1>Top Features</h1>
      <div class="Home1_border"> </div>
      <br>
      <ul class="Home1_ul">
        <a href="#" target="_blank"><li>Student_Portal</li></a>
        <a onclick="DatabaseLogin()" style="cursor: pointer" ><li>Database</li></a>
        <a href="#"><li>Generate_ID</li></a>
        <a href="#"><li>Semester_Result</li></a>
      </ul>

    </div>
    <div class="home1_footer_items">
      <h1>Updates<a href="#" style="margin-left: 9px;font-size: 10px;text-decoration: none;color: red;"> View all</a></h1>
      <div class="Home1_border"></div>
      <br>
      <div class="home1_ani">
      <ul class="Home1_Notice">
        <a href="#"><li>1. Generate ID Card..</li></a>
        <a onclick="DatabaseLogin()"><li>2. Manage Database (Login)..</li></a>
        <a href="#" target="_blank"><li>3. Manage Student Portal (Login)..</li></a>
        <a href="#"><li>4. Checkout Semester Result..</li></a>
      </ul>
</div>
    </div>
    <div class="home1_footer_items">
      <h1>Contact_US</h1>
      <div class="Home1_border"> </div>
      <br>
      <ul class="Home1_ul">
<li><p><i class="fa fa-phone-square" aria-hidden="true"></i>Phone:9876543210<br>033 2680 2389</p></li>
<br>
<li><p><i class="fa fa-envelope" aria-hidden="true"></i>Email: techno@gmail.com<br>
technohooghly@gmail.com</p></li>
<br><br>
<li><p><i class="fa fa-address-card" aria-hidden="true">Address: Grand Trunk Rd, near Khadina More
, Dharampur,Chinsurah,<br>700000,West Bengal India.</i></p></li>
      </ul>

    <div class="social_medea">
<a href="#"><i  class="fa fa-facebook" aria-hidden="true"></i></a>
<a  href="#"><i  class="fa fa-instagram" aria-hidden="true"></i></a>
<a href="#"><i  class="fa fa-twitter" aria-hidden="true"></i></i></a>
<a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
    </div>
    </div>
  </div>
  <div class="footer-bottom">
    Copyright &copy;College Management System 2020.All Rights Reserved.<u><p style="display: inline;float: right;">Devolopers</u>: Biman,
Debopom,
Ayushi,
Abhishek,
Hasanoor,
lalit
..</p>
  </div>
</div>
</div>
</body>
   <script src="{{ asset('js/sideNavbar.js')}}"></script>
</html>



<!-- Scripts -->



<script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>