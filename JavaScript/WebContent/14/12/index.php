<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
.STYLE1 {color: #990000}
-->
</style></head>
<script language="javascript">
function checkemail(email){
	var str=email;
	 //在JavaScript中，正则表达式只能使用"/"开头和结束，不能使用双引号
	var Expression=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; 
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}

function check(form1){
	if(form1.email.value==""){
		alert("请输入Email地址!");form1.email.focus();return;
	}
	if(!checkemail(form1.email.value)){
		alert("您输入的Email地址不正确!");form1.email.focus();return;
	}
	form1.submit();
}
	
</script>

<body>
<form id="form1" name="form1" method="post" action="">
  <table id="__01" width="501" height="494" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="5"><img src="images/zc_01.gif" width="501" height="122" alt="" /></td>
    </tr>
    <tr>
      <td rowspan="3"><img src="images/zc_02.gif" width="32" height="372" alt="" /></td>
      <td height="304" colspan="3" align="center" bgcolor="#FFFFE1"><table width="417" height="236">
        <tr>
          <td width="78" align="left">用户名：</td>
          <td width="316" align="left"><label>
            <input name="textfield" type="text" size="30" />
          </label></td>
        </tr>
        <tr>
          <td align="left">昵称：</td>
          <td align="left"><input name="textfield2" type="text" size="30" /></td>
        </tr>
        <tr>
          <td align="left">密码：</td>
          <td align="left"><input name="textfield3" type="text" size="30" /></td>
        </tr>
        <tr>
          <td align="left">确认密码：</td>
          <td align="left"><input name="textfield4" type="text" size="30" /></td>
        </tr>
        <tr>
          <td align="left">性别：</td>
          <td align="left"><label>
            <input name="radiobutton" type="radio" value="radiobutton" checked="checked" />
            男
            <input type="radio" name="radiobutton" value="radiobutton" />
            女</label></td>
        </tr>
        <tr>
          <td align="left">email地址：</td>
          <td align="left"><input name="email" type="text" size="30" />
            <span class="STYLE1"> *请输入正确email</span></td>
        </tr>

      </table></td>
      <td rowspan="3"><img src="images/zc_04.gif" width="25" height="372" alt="" /></td>
    </tr>
    <tr>
      <td><img src="images/zc_05.gif" width="186" height="25" alt="" /></td>
      <td width="69" height="25"><input type="image" name="imageField" onclick="return check(form1);"  src="images/zc_06.gif" /></td>
      <td><img src="images/zc_07.gif" width="189" height="25" alt="" /></td>
    </tr>
    <tr>
      <td colspan="3"><img src="images/zc_08.gif" width="444" height="43" alt="" /></td>
    </tr>
  </table>
</form>
</body>
</html>
