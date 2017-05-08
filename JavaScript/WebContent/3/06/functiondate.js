function countdown(title,Intime,divId){
var online= new Date(Intime);				//根据参数定义时间对象
var now = new Date();						//定义当前系统时间对象
var leave = online.getTime() - now.getTime();	//计算时间差	
var day = Math.floor(leave / (1000 * 60 * 60 * 24))+1;			
if (day > 1){ 
	 	if(document.all){			
			divId.innerHTML="<b>——距"+ title+"还有"+day +"天！</b>";	//页面显示信息
		}
}else{
	 if (day == 1) {
	 	if(document.all){
			divId.innerHTML="<b>——明天就是"+title+"啦!</b>";
		}
	 	
	}else{
		 if (day == 0) {divId.innerHTML="<b>今天就是"+title+"呀！</b>";
		 }else{
			 if(document.all){
				divId.innerHTML="<b>——唉呀！"+title+"已经过了！</b>";
			 }
		}
	}
  }
}
