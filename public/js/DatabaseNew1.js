
	var insertTeacher=document.getElementById("InsertTeacherId"); 

	function InsertTeacher(){
        if(insertTeacher.style.display=="none"){
          insertTeacher.style.display="block";
        }else{
          insertTeacher.style.display="none";
        }
	}
	function InsertTeacherCross(){
		insertTeacher.style.display="none";
	}
	// window.addEventListener('mouseup',function(event){
 // 	if(event.target != insertCurrentStudent && event.target.parentNode!=insertCurrentStudent){
 // 		insertCurrentStudent.style.display = 'none';
 // 	}
 // });

 // Alloted Database Section

	var classAllotedVar=document.getElementById("AllotIdDatabseSection"); 
 	function ClassAlloted(){
 		if(classAllotedVar.style.display=="none"){
          classAllotedVar.style.display="block";
        }else{
          classAllotedVar.style.display="none";
        }
 	}
 	function ClassAllotedCross(){
 		classAllotedVar.style.display="none";
 	}


 	// Employee Detail


 	var employeeId=document.getElementById("EmployeeInsertId"); 

	function EmployeeFunction(){
 		if(employeeId.style.display=="none"){
          employeeId.style.display="block";
        }else{
          employeeId.style.display="none";
        }
 	}
	function InsertEmoplyeeCross(){
 		employeeId.style.display="none";
 	}

  // Logout 
  document.querySelector(".Logout").addEventListener("click", function(){
  window.location.href = "/DatabaseLogout";

});
// logoutFun
  var logout=document.getElementById("logoutFun");
  logout.addEventListener("click", function(){
  window.location.href = "/DatabaseLogout";

});