// 
// InnerErrorSection
// SecondInnerError
var Errormainvar=document.getElementById('ErrorSectionID');
if (Errormainvar) {
Errormainvar.addEventListener('click',function(){
	ErrorSectionID.style.display = 'none';
});
}



var varSidenavbar=document.querySelector('.SideNavbar');
function SideNavIconFun(){
	 if (varSidenavbar.style.width == '210px') {
            varSidenavbar.style.width = '0px';
        }
        else {
        varSidenavbar.style.width = '210px';
    }
}
