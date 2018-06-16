<?php
session_start();
if (empty($_SESSION['username'])){
	echo "<script>alert('请先登陆！');</script>";
	header("refresh:0;url=../php/login.php");//跳转页面，注意路径
}
?>




<!DOCTYPE html>
<html>
<head>
<title>留言板块</title>
<link href="../css/contact.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pink Contact Form ,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>

</head>
<body>
	<h1>留言板块</h1>
	<div class="login-01">
			<form action="../php/check_contact.php" method="post">
				<ul>
				<li class="first">
					<a href="#" class=" icon user"></a><input type="text" class="text" name="name" value="" placeholder="姓名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
					<div class="clear"></div>
				</li>
				<li class="first">
					<a href="#" class=" icon email"></a><input type="text" class="text" placeholder="邮箱" name="email" pvalue="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
					<div class="clear"></div>
				</li>
				<li class="second">
				<a href="#" class=" icon msg"></a><textarea value="" placeholder="留言" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"></textarea>
				<div class="clear"></div>
				</li>
			</ul>
			<input type="submit" onclick="myFunction()" value="提交" >
			<div class="clear"></div>
		</form>
</div>
	<!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p style="color: black;">Design by dream-heart<a target="_blank" href="#"></a></p>
		</div>
	</div>
	<!--//end-copyright-->
	
</body>
</html>
