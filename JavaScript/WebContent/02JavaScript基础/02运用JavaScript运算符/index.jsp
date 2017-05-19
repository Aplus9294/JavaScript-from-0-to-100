<%@ page contentType="text/html; charset=utf-8" language="java" import="java.sql.*" errorPage="" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>运用JavaScript运算符</title>
	</head>

	<body>
		<script type="text/javascript">
			var num1 = 120,
				num2 = 25; //定义两个变量
			document.write("120+25=" + (num1 + num2) + "<br>"); //计算两个变量的和
			document.write("120-25=" + (num1 - num2) + "<br>"); //计算两个变量的差
			document.write("120*25=" + (num1 * num2) + "<br>"); //计算两个变量的积
			document.write("120/25=" + (num1 / num2) + "<br>"); //计算两个变量的余数
			document.write("(120++)=" + (num1++) + "<br>"); //自增运算
			document.write("++120=" + (++num1) + "<br>");
		</script>

	</body>

</html>