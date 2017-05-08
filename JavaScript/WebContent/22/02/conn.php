<?php
$conn=mysql_connect("localhost","root","root");		//连接数据库服务器
mysql_select_db("db_database23",$conn);				//连接db_database08数据库
mysql_query("set names gb2312");						//设置数据库编码格式
?>