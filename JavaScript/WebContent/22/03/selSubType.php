<?php
	$link=mysql_connect("localhost","root","root");
	mysql_select_db("db_database24",$link);
	$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE',$RequestAjaxString);		//Ajax中先用encodeURIComponent对要提交的中文进行编码
	mysql_query("set names gb2312");
	$type=$_GET['type'];
	$sql=mysql_query("select * from tb_type where type='$type'");
	$result=mysql_fetch_array($sql);
	
?>
<select name="typeID" class="textarea" id="typeID">
<?php
do{
?>
   <option value="<?php echo $result['subtype'];?>"><?php echo $result['subtype'];?></option>
<?php
}while($result=mysql_fetch_array($sql));
?> 
</select>
