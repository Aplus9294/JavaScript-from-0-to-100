<?php
	session_start();
	header('Content-type: text/html;charset=gb2312'); 
	$sql = "select * from tb_user where name='".$_POST['user']."' and password='".md5($_POST['pass'])."'";		//定义SQL语句
	require_once("system/system.inc.php");  			//调用指定的文件
	$arraybbstell=$admindb->ExecSQL($sql,$conn); 		//执行select查询语句
	if(!$arraybbstell){		
		echo "登录失败，用户名或密码错误，请重新登录";
	}else{
		$_SESSION['member'] = $_POST[user];
		echo $_POST[user]."登录成功"."&nbsp;&nbsp;&nbsp;&nbsp;"."<a href='#'>由此进入主页</a>";
	}   
?>