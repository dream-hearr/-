
function check() {
	var user=document.getElementById("username");
	var psd=document.getElementById("password");
	if (user.value==''||psd.value==''){
		user.value="用户名或密码不能为空";
	}
}