<?php
//数据库连接类
class ConnDB{
	var $dbtype;
	var $host;
    var $user;
    var $pwd;
    var $dbname;
    var $debug;
    var $conn;    
    function ConnDB($dbtype,$host,$user,$pwd,$dbname,$debug=false){	//构造方法，为成员变量赋值
		$this->dbtype=$dbtype;
    	$this->host=$host;
		$this->user=$user;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
		$this->debug=$debug;
	}
    function GetConnId(){		    			//实现与不同数据库的连接并返回连接对象
  		require("adodb/adodb.inc.php");		//调用ADODB类库文件
    	if($this->dbtype=="mysql" || $this->dbtype=="mssql"){	//判断成员变量传递的数据库类型
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
	
    
    //关闭与数据库的连接
    function CloseConnId(){
    	
    	$this->conn->Disconnect();
    }
    
}

//数据库管理类
class AdminDB{
	function ExecSQL($sqlstr,$conn){		//定义方法，参数为SQl语句和连接数据库返回的对象
		$sqltype=strtolower(substr(trim($sqlstr),0,6));		//截取SQL中的前6个字符串，并转换成小写
		$rs=$conn->Execute($sqlstr);		//执行SQL语句
		if($sqltype=="select"){				//判断如果SQL语句的类型为SELECT
			$array=$rs->GetRows();			//执行该语句，获取查询结果
			if(count($array)==0 || $rs==false)	//判断语句是否执行成功
				return false;				//如果查询结果为0，或者执行失败，则返回false
			else
				return $array;				//否则返回查询结果的数组
		}elseif ($sqltype=="update" || $sqltype=="insert" || $sqltype=="delete"){
			//判断如果SQL语句类型不为select、则执行如下操作
			if($rs)
			    return true;		//执行成功返回true
			else 
			    return false;    	//是否返回false
		}
	}
}
//系统常用方法
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
	
	   $content=str_replace("[font face=楷体_GB2312]","<font face=楷体_GB2312>",$content);
	   $content=str_replace("[font face=宋体]","<font face=新宋体>",$content);
	   $content=str_replace("[font face=隶书]","<font face=隶书>",$content);
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