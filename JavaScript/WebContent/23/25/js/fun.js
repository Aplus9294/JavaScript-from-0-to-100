// JavaScript Document
var i=1;
function progress(){
    setInterval("beginProgress()", 600);	
}
function beginProgress(){
	$("#img").attr("src", "img.php?m="+i);
	i++;
	if(i>=12){
	    i=1;	
	}
}

