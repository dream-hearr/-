<?php 
session_start();
include "/conn.php";  //note
if (isset($_SESSION['username'])){
$username=$_SESSION['username'];
$sql="select id from tb_user where name='$username'";
$res=mysql_query($sql);
if (mysql_num_rows($res)!=1){
	unset($_SESSION['username']);
	}
}
?>


<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8" />
<title>路飞个人博客</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../css/base.css" rel="stylesheet">
<link href="../css/index.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/sliders2.js"></script>
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<!-- 返回顶部调用 begin -->
<script type="text/javascript" src="../js/up/jquery.js"></script>
<script type="text/javascript" src="../js/up/js.js"></script>
<!-- 返回顶部调用 end-->
</head>
<body>
<header>
  <div class="logo f_l"> <a href="/"><img src="images/index/logo.png"></a> </div>
  <nav id="topnav" class="f_r">
    <ul>
      <a href="../index.php" target="_blank">首页</a> <a href="../php/about_me.php" target="_blank">关于我</a> <a href="php/article.php" target="_blank">文章</a><a href="../php/contact_form.php" target="_blank">留言</a> 
      <?php
      	if (isset($_SESSION['username'])){
      		$welcome=$_SESSION['username'];
      		 echo "<a href='../php/update_user.php' target='_blank'>你好！$welcome</a><a href='../php/clear_session.php' target='_blank'>退出</a>";
      	}
      	else{
      		echo "<a href='../php/login.php' target='_blank'>登录</a><a href='../php/register.php' target='_blank'>注册</a>";
       }
      ?>
    </ul>
    <script src="js/nav.js"></script> 
  </nav>
</header>
	</body>
</html>
