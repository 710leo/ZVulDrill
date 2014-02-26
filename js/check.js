function check()
{ 
	with(document.all){
		if(passwd.value!=passwd2.value)
		{
			alert("密码不一致");
			passwd2.value = "";
		}
	}
}