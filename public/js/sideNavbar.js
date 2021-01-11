    //Side Nav Funtions
    var sidenavbar=document.getElementById("TopSideNav");
    function SideNavbar(){
    	if (sidenavbar.style.width=="0px") {
    		sidenavbar.style.width="250px";
    	}else {
    		sidenavbar.style.width="0px";
    	}
    	}
    	function RemoveNavbar(){
    		sidenavbar.style.width="0px";
    	}



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
        ////DropDown//
      var Dropdown1=document.getElementById("dropdownSidebar1");
      function Academics1(){
      	if(Dropdown1.style.display=="block"){
      		Dropdown1.style.display="none";
      	}else{
      		Dropdown1.style.display="block";
      	}
      }
      var Dropdown2 =document.getElementById("dropdownSidebar2");
       function Academics2(){
      	if(Dropdown2.style.display=="block"){
      		Dropdown2.style.display="none";
      	}else{
      		Dropdown2.style.display="block";
      	}
      }

      /* Database Popup*/
      var Databaselogin=document.getElementById("DatabaseLoginPopup");
      function DatabaseLogin(){
        if(Databaselogin.style.display=="block"){
          Databaselogin.style.display="none";
        }else{
          Databaselogin.style.display="block";
        }
      }
      /*
      Click OutSide Colse*/
var modal = document.getElementById('DatabaseLoginPopup');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// var modal2 = document.getElementById('DatabaseLoginPopup');
// var model1 = document.getElementById('DatabaseLoginCross');
// window.onclick = function(event) {
//     if (event.target == model1) {
//         modal2.style.display = "none";
//     }
// }
function DatabaseCross(){
  Databaselogin.style.display="none";
}