<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>{ $title }</title>
</head>
<link rel="stylesheet" href="css/reg.css"/>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/check.js"></script>
<body>
<table width="520" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td><img src="images/03-11(4).jpg" width="1003" height="185"></td>
  </tr>
  <tr>
    <td background="images/03-11.jpg">
<table width="547" border="0" align="center" cellpadding="0" cellspacing="0">
 <form id="register" name="register" method="post" >
    <tr>
      <td width="108" height="25"><div align="right">会员名：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="name" name="name" type="text" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" />&nbsp;<font color="red">*</font></td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25"><div align="right">密&nbsp;码：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="pwd1" name="pwd1" type="password" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td width="190">&nbsp;</div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">验证码：</div></td>
      <td width="78" height="25">&nbsp;
        <input id="yzm" type="text" name="yzm" size="8" onBlur="javascript:chkyzm(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>
        <input name="yzm2" type="hidden" value="" /></td>
      <td width="63" align="center" valign="middle"><script>yzm(register)</script></td>
      <td width="108"><a href="javascript:code(register)">&nbsp;&nbsp;看不清</a></td>
      <td height="25"><div id="yzm1"><font color="#999999">输入验证码</font></div></td>
    </tr>
    <tr>
      <td height="50" colspan="5" align="center" valign="bottom">&nbsp;
          <img src="images/03-11(2).jpg" width="91" height="31" onclick="showsimple();" />
        &nbsp;&nbsp;
        <input type="image" name="imageField2" src="images/03-11(3).jpg" onclick="form.reset();return false;" /></td>
      </tr>
  
  </form>  <tr>
      <td height="50" colspan="5" align="center" valign="bottom"><div id="webpage" /></td>
    </tr>
</table></td>
  </tr>
  <tr>
    <td><img src="images/03-11(1).jpg" width="1003" height="111"></td>
  </tr>
</table>
</body>
</html>