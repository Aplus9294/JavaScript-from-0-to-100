<html>
<head>
<title>Ӧ��Ajax����ʵ����ˢ�µļ��������б�</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
body {
	background-color: #0099CC;
}
-->
</style></head>
<script language="javascript">
var http_request = false;
function createRequest(url) {
	//��ʼ�����󲢷���XMLHttpRequest����
	http_request = false;
	if (window.XMLHttpRequest) { // Mozilla��������IE����������
		http_request = new XMLHttpRequest();
		if (http_request.overrideMimeType) {
			http_request.overrideMimeType("text/xml");
		}
	} else if (window.ActiveXObject) { // IE�����
		try {
			http_request = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				http_request = new ActiveXObject("Microsoft.XMLHTTP");

		   } catch (e) {}
		}
	}
	if (!http_request) {
		alert("���ܴ���XMLHTTPʵ��!");
		return false;
	}
	http_request.onreadystatechange = alertContents;    //ָ����Ӧ����
	//����HTTP����
	http_request.open("GET", url, true);
	http_request.send(null);
}
function alertContents() {    //�������������ص���Ϣ
	if (http_request.readyState == 4) {
		if (http_request.status == 200) {
			subType.innerHTML=http_request.responseText;
		} else {
			alert('�������ҳ�淢�ִ���');
		}
	}

}
</script>
<script language="javascript">
function F_super(val){
	createRequest("selSubType.php?type="+val+'&nocache='+new Date().getTime());  //ʵ�ּ��������б�
}
</script>
<script language="javascript">
function mycheck(){
	if (form1.goodsName.value==""){
		alert("��������Ʒ���ƣ�");form1.goodsName.focus();return;
	}
	if (form1.picture.value==""){
		alert("������ͼƬ�ļ���·����");form1.picture.focus();return;
	}
	if (form1.price.value==""){
		alert("��������Ʒ�Ķ��ۣ�");form1.price.focus();return;
	}
	if (isNaN(form1.price.value)){
		alert("������Ķ��۴������������룡");form1.price.value="";form1.price.focus();return;
	}	
	if (form1.introduce.value==""){
		alert("��������Ʒ��飡");form1.introduce.focus();return;
	}	
	form1.submit();	
}
</script>
<body>
<table width="575"  border="0" align="center" cellpadding="-2" cellspacing="-2" bordercolordark="#FFFFFF">
  <form action="" method="post" name="form1">
    <tr>
      <td width="14%" height="27">&nbsp;��Ʒ���ƣ�</td>
      <td height="27" colspan="3">&nbsp;
          <input name="goodsName" type="text" class="Sytle_text" id="bookID2" size="50">
&nbsp;&nbsp; </td>
    </tr>
    <tr>
      <td height="27">&nbsp;�������ࣺ</td>
      <td width="31%" height="27">&nbsp;
          <select name="type" class="textarea" id="type" onChange="F_super(this.value)">
										<?php
										$link=mysql_connect("localhost","root","root");
										mysql_select_db("db_database24",$link);
										$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);			//Ajax������encodeURIComponent��Ҫ�ύ�����Ľ��б���
										mysql_query("set names gb2312");
										$sql=mysql_query("select * from tb_type group by type");
										$result=mysql_fetch_object($sql);
										do{
										header('Content-type: text/html;charset=GB2312');		//ָ���������ݵı����ʽΪGB2312
										?>
									  <option value="<?php echo $result->type;?>" selected><?php echo $result->type;?></option>
										<?php
										}while($result=mysql_fetch_object($sql));
										?>
        </select></td>
      <td width="13%" height="27">&nbsp;����С�ࣺ</td>
      <td width="42%" height="27" id="subType">&nbsp;</td>
    </tr>
    <tr>
      <td height="41">&nbsp;ͼƬ�ļ���</td>
      <td height="41">&nbsp;
          <input name="picture" type="text" class="Style_upload" id="picture">
      </td>
      <td height="41">&nbsp;�������ۣ�</td>
      <td height="41">&nbsp;
          <input name="price" type="text" class="Sytle_text" id="price">
        (Ԫ)</td>
    </tr>
    <tr>
      <td height="103">&nbsp;��Ʒ��飺</td>
      <td colspan="3"><span class="style5">&nbsp; </span>
          <textarea name="introduce" cols="60" rows="5" class="textarea" id="introduce"></textarea></td>
    </tr>
    <tr>
      <td height="28" colspan="4" align="center"><input name="Button" type="button" class="btn_grey" value="����" onClick="mycheck();">
&nbsp;
        <input name="Submit2" type="reset" class="btn_grey" value="����">
&nbsp;</td>
    </tr>
  </form>
</table>
<script language="javascript">
F_super(form1.type.value);
</script>
</body>
</html>