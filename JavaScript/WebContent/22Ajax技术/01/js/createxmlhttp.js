var xmlhttp = false;									//��ʼ������
//���ActiveXObject���ڣ�˵����IE5.0���ϵİ汾������ʹ��XMLHttpRequest����
if(window.ActiveXObject){ 
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}else if(window.XMLHttpReuqest){
	xmlhttp = new XMLHttpRequest();
}
