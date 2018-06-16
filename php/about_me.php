<?php
session_start();
include "../php/conn.php";
?>

<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>关于我—懒癌晚期的我</title>
<meta name="keywords" content="luffy">
<meta name="description" content="">
<link href="../css/base2.css" rel="stylesheet">
<link href="../css/about.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="/skin/2014/js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<br />
<article class="aboutcon">
<h1 class="t_nav"><span>纸上得来终觉浅，绝知此事要躬行，且行且珍惜，加油，你是最胖的</span><a href="../index.php" class="n1">网站首页</a><a href="#" class="n2">关于我</a></h1>
<div class="about left">
  <h2>Just about me</h2>
    <ul> 
     <p>
     	<?php
	$arr="../message/article/0.txt";
	$open=fopen("$arr","r");
	$res=fread($open,filesize($arr));
	echo $res;
	fclose($open);

?>
	</p>
    </ul>
    <h2>About my blog</h2>
    <p>域  名：www.cupers.org 创建于2017年06月20日 </p>
    <p>服务器：老薛主机</p>
    <p>程  序：PHP+MYSQL</p>


</div>
<aside class="right">  
    <div class="about_c">
    <p>网名：<span>dream-heart</span></p>
    <p>姓名：王勇 </p>
    <p>籍贯：重庆市—江津区</p>
    <p>现居：北京市—昌平区</p>
    <p>职业：学生</p>
    <p>爱好：睡觉 搬运工</p>
    <p>喜欢的动漫：《海贼王》《秦时明月》</p>

</div>     
</aside>
</article>
</body></html>
