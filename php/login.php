<!DOCTYPE HTML>
<html>
<head>
<title>登陆</title>
<link href="../css/login.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!-- -->
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script src="../js/jquery.min.js"></script>
		<script language=JavaScript>

 		function InputCheck(LoginForm){
  			if (LoginForm.username.value == ""){
     			alert("请输入用户名!");
     			LoginForm.username.focus();
     			return (false);
   			}
   			if (LoginForm.password.value == ""){
     			alert("请输入密码!");
     			LoginForm.password.focus();
     			return (false);
   			}
 		}
 		</script>
 		
 <script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
	</head>
	<body>
		<!-- contact-form -->	
<div class="message warning">
<div class="inset">
	<div class="login-head">
		<h1>登陆界面</h1>
		 <div class="alert-close"> </div> 			
	</div>
		<form action="check_login.php" method="post" onSubmit="return InputCheck(this)">
			<li>
				<input name="username" type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"><a href="#" class=" icon user"></a>
			</li>
				<div class="clear"> </div>
			<li>
				<input name="password" type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"> <a href="#" class="icon lock"></a>
			</li>
			<div class="clear"> </div>
			<div class="submit">
				<input type="submit" onclick="myFunction()" value="登陆" >
				<h4><a href="#">忘记密码 ?</a></h4>
				<h4><a href="../php/register.php">没有账号?现在注册！</a></h4>
						  <div class="clear">  </div>	
			</div>
				
		</form>
</div>	
</div>
	</body>
</html>