<?php
require("system.smarty.inc.php");		//包含类文件
require("system.class.inc.php");		//包含Smarty模板文件
$connobj=new ConnDB("mysql","localhost","root","root","db_database04",false);	//数据库连接类实例化
$conn=$connobj->GetConnId();		//执行数据库连接方法
$admindb=new AdminDB();			//数据库操作类实例化
$smarty=new SmartyProject();		//实例化Smarty配置类
?>
