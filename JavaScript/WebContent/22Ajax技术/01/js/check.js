function showsimple(){					//���������ƺ���
if(register.name.value==""){			//�ж��û����Ƿ�Ϊ��
		register.name.focus();
		return false;
	}
	if(register.pwd1.value==""){		//�ж������Ƿ�Ϊ��
		register.pwd1.focus();
		return false;
	}
	if(register.yzm.value==""){			//�ж���֤���Ƿ�Ϊ��
		register.yzm.focus();
		return false;
	}
	if(register.yzm.value!=register.yzm2.value){		//�ж��������֤���Ƿ���ȷ
		alert("Ч�����������");
		register.yzm.focus();
		return false;
	}
	var username = document.getElementById("name").value;		//��ȡ���ύ���û���
	var password = document.getElementById("pwd1").value;		//��ȡ����
	var post_method="user="+username+"&pass="+password;			//����URL����
	xmlhttp.open("POST","reg_chk.php",true);					//����ָ��������ļ�
	xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;");	 //��������ͷ��Ϣ
	xmlhttp.onreadystatechange=StatHandler;			//�ж�URL���õ�״ֵ̬������
	xmlhttp.send(post_method);						//�����ݷ��͸�������
}
function StatHandler(){									//���崦����
	if(xmlhttp.readyState==4 && xmlhttp.status==200){		//�ж����ִ�гɹ����������������		
		document.getElementById("webpage").innerHTML=xmlhttp.responseText;	//�����������ص����ݶ��嵽DIV��
	}
}
function chkyzm(form){					//����֤�������֤
	if(form.yzm.value==""){
		yzm1.innerHTML="<font color=#FF0000>������Ч���룡</font>"; 
	}else if(form.yzm.value!=form.yzm2.value){
		yzm1.innerHTML="<font color=#FF0000>Ч�����������!</font>";
	}else{
		yzm1.innerHTML="<font color=green>������ȷ</font>";
	}
}
function yzm(form){						//������֤��
	var num1=Math.round(Math.random()*10000000);
	var num=num1.toString().substr(0,4);
	document.write("<img name=codeimg src=yzm.php?num="+num+"'>");
	form.yzm2.value=num;
}
function code(form){						//������֤��
	var num1=Math.round(Math.random()*10000000);
	var num=num1.toString().substr(0,4);
	document.codeimg.src="yzm.php?num="+num;
	form.yzm2.value=num;
}