<?php
require("smarty\smarty\libs\Smarty.class.php");		//����Smarty�ļ�
class SmartyProject extends  Smarty{		//�����࣬�̳�Smarty����
	function SmartyProject(){			//���巽��������Smartyģ��
		$this->template_dir = "./";		//ָ��ģ���ļ��洢�ڸ�Ŀ¼��
		$this->compile_dir = "./system/Smarty/templates_c/";	//ָ�������ļ��洢��system/Smarty/templates_c/�ļ�����
		$this->config_dir = "./system/Smarty/configs/";
		$this->cache_dir = "./system/Smarty/cache/"; 
    }
} 
?>
