<?php
	require_once("system/system.inc.php");  //调用指定的文件
	$smarty->assign('title','Ajax不刷新页面提交表单数据');
	$smarty->display('index.tpl');
?>
