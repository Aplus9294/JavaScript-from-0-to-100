<?php
	session_start();
	header('Content-type: text/html;charset=gb2312'); 
	$sql = "select * from tb_user where name='".$_POST['user']."' and password='".md5($_POST['pass'])."'";		//����SQL���
	require_once("system/system.inc.php");  			//����ָ�����ļ�
	$arraybbstell=$admindb->ExecSQL($sql,$conn); 		//ִ��select��ѯ���
	if(!$arraybbstell){		
		echo "��¼ʧ�ܣ��û�����������������µ�¼";
	}else{
		$_SESSION['member'] = $_POST[user];
		echo $_POST[user]."��¼�ɹ�"."&nbsp;&nbsp;&nbsp;&nbsp;"."<a href='#'>�ɴ˽�����ҳ</a>";
	}   
?>