            



            // **********Onload Function**********//



    //Preload
    //onload function
    var preload =document.getElementById('loading');
    function OpaningLoad(){
      preload.style.display='none';
      }

      
      ////DropDown//
      var Dropdown=document.getElementById("dropdownSidebar");
      function Academics(){
        if(Dropdown.style.display=="block"){
            Dropdown.style.display="none";
        }else{
            Dropdown.style.display="block";
        }
      }







// var preload =document.getElementById('loading');
//     function OpaningLoad(){
//       preload.style.display='none';
//       }



// Demo Popup


 	 var sidenavbar=document.getElementById("PopupFormID");
    function Popup(){
    	if (sidenavbar.style.width=="0%") {
    		sidenavbar.style.width="60%";
    	}else {
    		sidenavbar.style.width="0%";
    	}
    	}
    	function RemoveNavbar(){
    		sidenavbar.style.width="0px";
    	}


                    // *********** DatabaseTemplate **********

    //  Side DropDown 1 (Insert Section)
    var sideDropDown1=document.getElementById("SideNavDropId1");
    function FirstSideDrop(){
        if (sideDropDown1.style.height == '0px') {
            sideDropDown1.style.height = '139px';
        }
        else {
        sideDropDown1.style.height = '0px';
    }
    } 
// Clicking outside of dropdown
//What is addEventListener ..Conditions are basics ..means you have to clear the basic first then project on it
    window.addEventListener('mouseup',function(event){
    if(event.target != sideDropDown1 && event.target.parentNode!=sideDropDown1){
        sideDropDown1.style.height = '0px';
    }
    });



    //  Side DropDown 2 (View Section)


    var sideDropDown2=document.getElementById("SideNavbarId2");
    
    function SecondSideDrop(){
        if (sideDropDown2.style.height == '0px') {
            sideDropDown2.style.height = '139px';
        }
        else {
        sideDropDown2.style.height = '0px';
    }
    }
    window.addEventListener('mouseup',function(event){
    if(event.target != sideDropDown2 && event.target.parentNode!=sideDropDown2){
        sideDropDown2.style.height = '0px';
    }
    });


    //  Side DropDown 3 (Student Portal Section)

    var sideDropDown3=document.getElementById("SideNavbarId3");
    function ThirdSideDrop(){
        if (sideDropDown3.style.height == '0px') {
            sideDropDown3.style.height = '70px';
        }
        else {
        sideDropDown3.style.height = '0px';
    }
    }
    window.addEventListener('mouseup',function(event){
    if(event.target != sideDropDown3 && event.target.parentNode!=sideDropDown3){
        sideDropDown3.style.height = '0px';
    }
    });


    //  Side DropDown 4 (Online Applicaton Section)


    var sideDropDown4=document.getElementById("SideNavbarId4");
    function FourthSideDrop(){
        if (sideDropDown4.style.height == '0px') {
            sideDropDown4.style.height = '70px';
        }
        else {
        sideDropDown4.style.height = '0px';
    }
    }
    window.addEventListener('mouseup',function(event){
    if(event.target != sideDropDown4 && event.target.parentNode!=sideDropDown4){
        sideDropDown4.style.height = '0px';
    }
    });



//      ********* Home Page Popup ******** 
    



    // Insert Current Student Application Form PopUp
    
    var insertCurrentStudent=document.getElementById("InsertStudentId"); 

    function InsertStudent(){
        if(insertCurrentStudent.style.display=="block"){
          insertCurrentStudent.style.display="none";
        }else{
          insertCurrentStudent.style.display="block";
        }
    }
    function InsertCurrentStudentCross(){
        insertCurrentStudent.style.display="none";
    }

    // window.addEventListener('mouseup',function(event){
    //     if(event.target != insertCurrentStudent && event.target.parentNode!=insertCurrentStudent){
    //         insertCurrentStudent.style.display = 'none';
    //     }
    // });
    // Just Check Outside click




    // Insert Teacher Application Form PopUp

    var insertTeacher=document.getElementById("InsertTeacherId"); 

    function InsertTeacherr(){
        if(insertTeacher.style.display=="block"){
          insertTeacher.style.display="none";
        }else{
          insertTeacher.style.display="block";
        }
    }
    function InsertTeacherCross(){
        insertTeacher.style.display="none";
    }
    // window.addEventListener('mouseup',function(event){
 //     if(event.target != insertCurrentStudent && event.target.parentNode!=insertCurrentStudent){
 //         insertCurrentStudent.style.display = 'none';
 //     }
 // });

 

    // Alloted Database Application Insert Form Section Popup

    var classAllotedVar=document.getElementById("AllotIdDatabseSection"); 
    function ClassAllotedd(){
        if(classAllotedVar.style.display=="block"){
          classAllotedVar.style.display="none";
        }else{
          classAllotedVar.style.display="block";
        }
    }
    function ClassAllotedCross(){
        classAllotedVar.style.display="none";
    }


    // Employee Detail Application Insert Form Section Popup


    var employeeId=document.getElementById("EmployeeInsertId"); 

    function EmployeeeFunction(){
        if(employeeId.style.display=="block"){
          employeeId.style.display="none";
        }else{
          employeeId.style.display="block";
        }
    }
    function InsertEmoplyeeCross(){
        employeeId.style.display="none";
    }