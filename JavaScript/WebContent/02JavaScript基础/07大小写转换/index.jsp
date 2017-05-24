<%@ page contentType="text/html; charset=utf-8" language="java" import="java.sql.*" errorPage="" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>大小写转换</title>
	</head>

	<body>
		<script language="javascript">
			var myString = new String("aBcDe");
			var lower = myString.toLowerCase();
			alert(myString + "转换为小写字母后为：" + lower)
		</script>

	</body>

</html>