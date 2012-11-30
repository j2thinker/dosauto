

function menuFix() {
    var sfEls = document.getElementById("nav").getElementsByTagName("li");
    for (var i=0; i<sfEls.length; i++) {
        sfEls[i].onmouseover=function() {
        this.className+=(this.className.length>0? " ": "") + "sfhover";
        }
        sfEls[i].onMouseDown=function() {
        this.className+=(this.className.length>0? " ": "") + "sfhover";
        }
        sfEls[i].onMouseUp=function() {
        this.className+=(this.className.length>0? " ": "") + "sfhover";
        }
        sfEls[i].onmouseout=function() {
        this.className=this.className.replace(new RegExp("( ?|^)sfhover\\b"), 
"");
        }
    }
}
window.onload=menuFix;


function dik(){
document.getElementById('dipin').style.display="block";
}
function dib(){
document.getElementById('dipin').style.display="none";
}



function bjc(i){
	   switch(i){
	   case 2:
	   document.getElementById('dh2').style.background="#E1E7E8";
	   break;
	   case 3:
	   document.getElementById('dh3').style.background="#E1E7E8";
	   break;
	   case 4:
	   document.getElementById('dh4').style.background="#E1E7E8";
	   break;
	   case 5:
	   document.getElementById('dh5').style.background="#E1E7E8";
	   break;
	   case 6:
	   document.getElementById('dh6').style.background="#E1E7E8";
	   break;
	   case 7:
	   document.getElementById('dh7').style.background="#E1E7E8";
	   break;
	   case 8:
	   document.getElementById('dh8').style.background="#E1E7E8";
	   break;	  
	   
	   } 
   }
   
function bjz(i){
	   switch(i){
	   case 2:
	   document.getElementById('dh2').style.background=" ";
	   break;
	   case 3:
	   document.getElementById('dh3').style.background=" ";
	   break;
	   case 4:
	   document.getElementById('dh4').style.background=" ";
	   break;
	   case 5:
	   document.getElementById('dh5').style.background=" ";
	   break;
	   case 6:
	   document.getElementById('dh6').style.background=" ";
	   break;
	   case 7:
	   document.getElementById('dh7').style.background=" ";
	   break;
	   case 8:
	   document.getElementById('dh8').style.background=" ";
	   break;	  
	   
	   } 
   }



