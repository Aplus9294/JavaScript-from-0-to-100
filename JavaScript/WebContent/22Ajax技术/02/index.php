<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script language="javascript" src="JS/AjaxRequest.js"></script>
<script language="javascript">
/******************错误处理的方法*******************************/
function onerror(){
	alert("您的操作有误！");
}
/******************实例化Ajax对象的方法*******************************/
function getInfo(){
	var loader=new net.AjaxRequest("check.php?nocache="+new Date().getTime(),deal_getInfo,onerror,"GET");
}
/************************回调函数**************************************/
function deal_getInfo(){
	document.getElementById("showInfo").innerHTML=this.req.responseText;
}
window.onload=function(){
	getInfo();	//调用getInfo()方法获取商城公告
	window.setInterval("getInfo()", 600000);	//每隔10分钟调用一次getInfo()方法
}
</script>
<style type="text/css">
body{
	background-image: url(images/bg.jpg);
	background-repeat: no-repeat;
}
#layout{
	position:absolute;
	left:596px;
	top:162px;
	width:184px;
	padding: 5px;
	font-size:9pt;
}
</style>
<title>实时显示商城公告</title>
</head>
<body>
<div id="layout">
	<marquee direction="up" scrollamount="3" style="height:107px; ">
		<div id="showInfo"></div>
	</marquee>
</div>
</body>
</html>