<?php
header("Content-type:text/html;charset=gb2312");
include("conn.php");
$query="select * from tb_news";
$res=mysql_query($query);
while($row=mysql_fetch_array($res)){
	echo $row['news'];
	echo "<br>";
}
?>

