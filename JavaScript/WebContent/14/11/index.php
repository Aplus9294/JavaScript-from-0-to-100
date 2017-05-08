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
-->
</style></head>
<script language="javascript">
function checkit(){						//自定义函数
	if(form1.name.value==""){				//判断用户名是否为空
	        alert("请输入用户名!");
   		    form1.name.select();
			return false;
         }		        		
       if(form1.pwd.value==""){			//判断密码是否为空
			alert("请输入密码!");
			form1.pwd.select();
			return false ;
		 }
		 	return true;
					 
}	
</script>
<body>
<form id="form1" name="form1" method="post" action="">
  <table id="__01" width="452" height="255" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="7"><img src="images/dl_01.gif" width="452" height="81" alt="" /></td>
    </tr>
    <tr>
      <td rowspan="3"><img src="images/dl_02.gif" width="59" height="173" alt="" /></td>
      <td height="107" colspan="4" align="center" bgcolor="#FEF5CC"><table width="285" height="98">
        <tr>
          <td width="96">用户名：</td>
          <td width="177"><label>
          <div align="left">
            <input name="name" type="text" size="22" />
          </div>
          </label></td>
        </tr>
        <tr>
          <td height="33">密码：</td>
          <td><label>
              <div align="left">
                <input name="pwd" type="password" size="24" />
              </div>
            </label></td>
        </tr>
        <tr>
          <td height="22" colspan="2">
&nbsp;</td>
          </tr>
      </table></td>
      <td colspan="2" rowspan="2"><img src="images/dl_04.gif" width="58" height="141" alt="" /></td>
    </tr>
    <tr>
      <td><img src="images/dl_05.gif" width="92" height="34" alt="" /></td>
      <td width="78" height="34"><input type="image" name="imageField" onclick="return checkit();" src="images/dl_06.gif" /></td>
      <td width="83" height="34"><input type="image" name="imageField2" onclick="form.reset(); return false;" src="images/dl_07.gif" /></td>
      <td><img src="images/dl_08.gif" width="82" height="34" alt="" /></td>
    </tr>
    <tr>
      <td colspan="5"><img src="images/dl_09.gif" width="358" height="32" alt="" /></td>
      <td><img src="images/dl_10.gif" width="35" height="32" alt="" /></td>
    </tr>
    <tr>
      <td><img src="images/分隔符.gif" width="59" height="1" alt="" /></td>
      <td><img src="images/分隔符.gif" width="92" height="1" alt="" /></td>
      <td><img src="images/分隔符.gif" width="78" height="1" alt="" /></td>
      <td><img src="images/分隔符.gif" width="83" height="1" alt="" /></td>
      <td><img src="images/分隔符.gif" width="82" height="1" alt="" /></td>
      <td><img src="images/分隔符.gif" width="23" height="1" alt="" /></td>
      <td><img src="images/分隔符.gif" width="35" height="1" alt="" /></td>
    </tr>
  </table>
</form>
</body>
</html>
