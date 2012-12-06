

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

function search_sub(){
	var search_data = $("#search_data")[0].value;
	if(!search_data){
		return false;
	}
	
	$(location).attr('href', '/index.php?/search/index&search_data='+search_data);
}
