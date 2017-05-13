// JavaScript Document
function progress(){
    setInterval("beginProgress()", 200);	
}
function beginProgress(){
	$.get("progress.php", null, function(data){
		 $("#pg").css("width", data+"%"); 
		 $("#pgtext").html("ÒÑÍê³É "+data+"%");
	});	
}

