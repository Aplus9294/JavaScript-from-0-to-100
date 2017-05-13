<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>jQuery制作进度条</title>
</head>
<script language="javascript" src="js/jquery-1.3.2.js"></script>
<script language="javascript" src="js/fun.js"></script>

<body>
<div style="width:200px; height:12px; border:1px solid #0000FF">
    <div id="pg" style="width:0%; height:100%;background-color:#0000FF"></div>
</div>
<br>
<div id="pgtext" style="width:100px; height:20px"></div>
<br>
<input type="button" value="开始" onclick="progress()" />
</body>
</html>


