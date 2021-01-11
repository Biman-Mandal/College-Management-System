
var rightLoginNav=document.getElementById("LoginSectionNav");
function RightNavApply(){
	if (rightLoginNav.style.display=="flex"){
		rightLoginNav.style.display="none";
	}else{
		rightLoginNav.style.display="flex";
	}
}
var LoginSide=document.getElementById("LoginSide");
var Courses=document.getElementById("Courses");
function Register(){
	if (LoginSide.style.display=="block") {
		LoginSide.style.display="none";
	}else {
		LoginSide.style.display="block";
	}
}
function Coursess(){
	if (Courses.style.display=="flex") {
		Courses.style.display="none";
	}else {
		Courses.style.display="flex";
	}
}
var WelcomeSectionNav=document.getElementById("WelcomeSectionNav");
function WelcomeNavApply(){
	if (WelcomeSectionNav.style.display=="flex"){
		WelcomeSectionNav.style.display="none";
	}else{
		WelcomeSectionNav.style.display="flex";
	}
}

   		var FormSubmit=document.getElementById('Logout');//.submit();
   		function Logout(){
   			FormSubmit.submit();
   		}


   		/* Outside Click */
   		
// window.onclick = function(event) {
//     if (event.target == rightLoginNav) {
//         rightLoginNav.style.display = "none";
//     }
// }
/*
ApplicationForm
UpdateApplication
ApplicationProfile
ApplicationLogout
*/
var ApplicationForm=document.getElementById("ApplicationForm");
var UpdateApplication=document.getElementById("UpdateApplication");
var ApplicationProfile=document.getElementById("ApplicationProfile");
var ApplicationLogout=document.getElementById("ApplicationLogout");

document.getElementById("ApplicationForm").addEventListener("click", function(){
	window.location.href = "/Application";
});
document.getElementById("UpdateApplication").addEventListener("click", function(){
	window.location.href = "/ApplicationUpdate";
});
document.getElementById("ApplicationProfile").addEventListener("click", function(){
	window.location.href = "/ApplicationProfile";
});
document.getElementById("ApplicationLogout").addEventListener("click", function(){
	window.location.href = "/Logout";

});
