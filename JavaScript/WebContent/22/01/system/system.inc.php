<?php
require("system.smarty.inc.php");		//�������ļ�
require("system.class.inc.php");		//����Smartyģ���ļ�
$connobj=new ConnDB("mysql","localhost","root","root","db_database04",false);	//���ݿ�������ʵ����
$conn=$connobj->GetConnId();		//ִ�����ݿ����ӷ���
$admindb=new AdminDB();			//���ݿ������ʵ����
$smarty=new SmartyProject();		//ʵ����Smarty������
?>
