@extends('home')
@section('content')
<head>
  <title>HomePage</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/NewHome2.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/NewHome.css')}}">
<div class="Homepage1_Top">
  
<!--////////////////////////////// NewHome.css(ImageSlider)/////////////////-->
  <body class="body">
  
  <section class="home">
     <div class="slider">
        <div class="slide active" style="background-image: url('Css/Database/TechnoEdit5.JPG')">
            <div class="container">
                <div class="caption">
                    <h1>Techno India Hooghly</h1>
                    <p>Techno India Hooghly, best MCA college in West Bengal. Techno India Hooghly is awarwaded as the Best MCA College in West Bengal as well as in India.</p>
                    <a href="ApplyOnline"  target="_blank">Apply Now</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image:  url('Css/Database/TechnoEdit3.jpg')">
            <div class="container">
                <div class="caption">
                    <h1>Bachelor of Computer Applications BCA</h1>
                    <p>Bachelor of Computer Applications BCA is a three year full-time regular degree course in Computer Application. BCA course is very popular with the students community because of its unique and most advanced curriculum which has been designed exhaustively and has been up-dated on the basis of national workshops of reputed experts.</p>
                    <a href="ApplyOnline"  target="_blank">Apply Now</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image:  url('Css/Database/TechnoEdit1.jpg')">
            <div class="container">
                <div class="caption">
                    <h1>Bachelor of Business Administration BBA</h1>
                    <p>The Bachelor of Business Administration BBA program is a three year full-time regular degree course in Business Administration directed at preparing participants for the challenges of supervisory and middle level-management positions in industry of the public sector. In addition to the program offers general business courses to broaden the p. communication skills.</p>
                    <a href="ApplyOnline"  target="_blank">Apply Now</a>
                </div>
            </div>
        </div>
         <div class="slide" style="background-image:  url('Css/Database/TechnoEdit2.jpg')">
            <div class="container">
                <div class="caption">
                    <h1>Master of Computer Application MCA</h1>
                    <p>The Master of Computer Application (MCA) program is a three year full-time regular post gradguate course in Computer Application designed to produce a dynamic breed of computer professionals possessing excellent managerial skills. Covering various methodologies to develop software products efficiently and error-free, by utilizing advance networking technologies and application software..</p>
                    <a href="ApplyOnline"  target="_blank">Apply Now</a>
                </div>
            </div>
        </div>
     </div>
   
    <!-- controls  -->
    <div class="controls">
        <div class="prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
</div>
        <div class="next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
</div>
    </div>

    <!-- indicators -->
    <div class="indicator">
    </div>

  </section>

 
 <script src="{{ asset('js/script.js')}}"></script>
</body>
<!--////////////////////////////////(NewHome2.css)...('Features')///////////////////////////////////*/-->
<!-- //////////////////////////////////.......Features..........///////////////////////////////-->


<section class="section5">
 	<div class="inner_section4">
    <div class="innerContent">
           	<h1>Features</h1>
           	<p>These are the main features of our site</p>
           </div>
           <div class="features-container">         
           	<div class="FeaturesContent-div1 Online_Addmission">
           	<!-- Extra -->
           	<div class="FeaturesLink"><a href="/ApplyOnline" target="_blank">
           		<div class="FeatutresIcon"><i class="fa fa-book" aria-hidden="true"></i></div>
           		<div class="FeatutresText">
           			<h3>Apply Online</h3>
           			<p>Admission open(BBA,BCA,MCA,MBA)</p>
           		</div>
           	</a>
           		</div>
           	</div>
           	<div class="FeaturesContent-div1 Student_Portal">
           			<div class="FeaturesLink"><a href="/StudentPotal" target="_blank">
           		<div class="FeatutresIcon"><i class="fa fa-user-o" aria-hidden="true"></i></div>
           		<div class="FeatutresText">
           			<h3>Student Potal</h3>
           			<p>Manage student data (Login Required)</p>
           		</div>
           		</a>
           		</div>
           	</div>
           	<div class="FeaturesContent-div1 Database_Manage">
           		<div class="FeaturesLink"><a onclick="DatabaseLogin()">
           		<div class="FeatutresIcon"><i class="fa fa-database" aria-hidden="true"></i></div>
           		<div class="FeatutresText">
           			<h3>Database</h3>
           			<p>Manage database(Login Required)</p>
           		</div>
           		</a>
           		</div>
           	</div>
           	<div class="FeaturesContent-div1 Generate_Id">
           		<div class="FeaturesLink"><a href="#">
           		<div class="FeatutresIcon"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
           		<div class="FeatutresText">
           			<h3>Generate Id</h3>
           			<p>Generate Id card</p>
           		</div>
           		</a>
           		</div>
           	</div>
           	<div class="FeaturesContent-div1 Semester_Result">
           		<div class="FeaturesLink"><a href="#">
           		<div class="FeatutresIcon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
           		<div class="FeatutresText">
           			<h3>Semester Result</h3>
           			<p>Semester Result</p>
           		</div>
           		</a>
           		</div>
           	</div>
           </div>
 	</div>

 </section>
 <section class="section6">
   <div class="innerSection6">
    <div class="OurDevoloper">
     <h3>Devolopers</h3>
     <p>Techno India Hooghly Final Major Project</p>
    </div>
    <div class="DevoloperDetail">
     <div class="Lalit devoloper">
      <div class=" devoloperImage"><i class="fa fa-user" aria-hidden="true"></i></div>
      <div class=" devoloperName">Hasanoor</div>
   
      <div class=" devoloperDetail">Designer</div>
    </div>
     <div class="Debopam devoloper"> 
      <div class=" devoloperImage">
        <img src="Css/Database/img3.jpeg"></div>
      <div class=" devoloperName">Biman</div>
      <div class=" devoloperDetail">Lead Devoloper</div></div>
     <div class="Biman devoloper"> <div class=" devoloperImage"><img src="Css/Database/img1.jpg"></div>
      <div class=" devoloperName">Lalit</div>
   
      <div class=" devoloperDetail">Project Manager</div></div>
     <div class="Hasanoor devoloper"> <div class=" devoloperImage"><img src="Css/Database/img3.jpg"></div>
      <div class=" devoloperName">Debopom</div>
     
      <div class=" devoloperDetail">Project Admin</div></div>
     <div class="Ribu devoloper"> <div class=" devoloperImage"><img src="Css/Database/img2.jpg"></div>
      <div class=" devoloperName">Abhishek</div>
     
      <div class=" devoloperDetail">Development Lead</div></div>
     <div class="Ayushi devoloper"> <div class=" devoloperImage"><i class="fa fa-user" aria-hidden="true"></i></div>
      <div class=" devoloperName">Ayushi</div>
      
      <div class=" devoloperDetail">Designer</div></div>
      <div class="Ayushi devoloper"> <div class=" devoloperImage"><i class="fa fa-user" aria-hidden="true"></i></div>
      <div class=" devoloperName">Ribu</div>
      
      <div class=" devoloperDetail">Detail<br>Detail</div></div>
   </div>
   </div>
 </section>



@endsection