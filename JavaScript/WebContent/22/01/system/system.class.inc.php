<?php
//���ݿ�������
class ConnDB{
	var $dbtype;
	var $host;
    var $user;
    var $pwd;
    var $dbname;
    var $debug;
    var $conn;    
    function ConnDB($dbtype,$host,$user,$pwd,$dbname,$debug=false){	//���췽����Ϊ��Ա������ֵ
		$this->dbtype=$dbtype;
    	$this->host=$host;
		$this->user=$user;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
		$this->debug=$debug;
	}
    function GetConnId(){		    			//ʵ���벻ͬ���ݿ�����Ӳ��������Ӷ���
  		require("adodb/adodb.inc.php");		//����ADODB����ļ�
    	if($this->dbtype=="mysql" || $this->dbtype=="mssql"){	//�жϳ�Ա�������ݵ����ݿ�����
    		if($this->dbtype=="mysql")
    			$this->conn=NewADOConnection("mysql");
    		else 
    	    	$this->conn=NewADOConnection("mssql");
    	    	$this->conn->Connect($this->host,$this->user,$this->pwd,$this->dbname);
		}elseif($this->dbtype=="access"){
    		$this->conn=NewADOConnection("access");
    	    $this->conn->Connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=".$this->dbname.";Uid=".$this->user.";Pwd=".$this->pwd.";");
    	}
    	$this->conn->Execute("set names gb2312");
    	if($this->dbtype=="mysql")
    		$this->conn->debug=$this->debug;
    	return $this->conn;
    }	
	
    
    //�ر������ݿ������
    function CloseConnId(){
    	
    	$this->conn->Disconnect();
    }
    
}

//���ݿ������
class AdminDB{
	function ExecSQL($sqlstr,$conn){		//���巽��������ΪSQl�����������ݿⷵ�صĶ���
		$sqltype=strtolower(substr(trim($sqlstr),0,6));		//��ȡSQL�е�ǰ6���ַ�������ת����Сд
		$rs=$conn->Execute($sqlstr);		//ִ��SQL���
		if($sqltype=="select"){				//�ж����SQL��������ΪSELECT
			$array=$rs->GetRows();			//ִ�и���䣬��ȡ��ѯ���
			if(count($array)==0 || $rs==false)	//�ж�����Ƿ�ִ�гɹ�
				return false;				//�����ѯ���Ϊ0������ִ��ʧ�ܣ��򷵻�false
			else
				return $array;				//���򷵻ز�ѯ���������
		}elseif ($sqltype=="update" || $sqltype=="insert" || $sqltype=="delete"){
			//�ж����SQL������Ͳ�Ϊselect����ִ�����²���
			if($rs)
			    return true;		//ִ�гɹ�����true
			else 
			    return false;    	//�Ƿ񷵻�false
		}
	}
}
//ϵͳ���÷���
class UseFun{
	
	function UnHtml($text){
	   $content=(nl2br(htmlspecialchars($text)));
	   $content=str_replace("[strong]","<strong>",$content);
	   $content=str_replace("[/strong]","</strong>",$content);
	   $content=str_replace("[em]","<em>",$content);
	   $content=str_replace("[/em]","</em>",$content);
	   $content=str_replace("[u]","<u>",$content);
	   $content=str_replace("[/u]","</u>",$content);
	
	
	   $content=str_replace("[font color=#FF0000]","<font color=#FF0000>",$content);
	   $content=str_replace("[font color=#00FF00]","<font color=#00FF00>",$content);
	   $content=str_replace("[font color=#0000FF]","<font color=#0000FF>",$content);
	
	   $content=str_replace("[font face=����_GB2312]","<font face=����_GB2312>",$content);
	   $content=str_replace("[font face=����]","<font face=������>",$content);
	   $content=str_replace("[font face=����]","<font face=����>",$content);
       $content=str_replace("[/font]","</font>",$content);
	   //$content=str_replace(chr(32)," ",$content);
	   $content=str_replace("[font size=1]","<font size=1>",$content);
	   $content=str_replace("[font size=2]","<font size=2>",$content);
	   $content=str_replace("[font size=3]","<font size=3>",$content);
	   $content=str_replace("[font size=4]","<font size=4>",$content);
       $content=str_replace("[font size=5]","<font size=5>",$content);
	   $content=str_replace("[font size=6]","<font size=6>",$content);
	   
	   $content=str_replace("[FIELDSET][LEGEND]","<FIELDSET><LEGEND>",$content);
	   $content=str_replace("[/LEGEND]","</LEGEND>",$content);
	   $content=str_replace("[/FIELDSET]","</FIELDSET>",$content);
	   return $content;
	}
	
}

?>