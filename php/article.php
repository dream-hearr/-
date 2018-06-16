<?php
session_start();
//未完成：页面刷新清除$_SESSION['begin']
if (isset($_GET['mark'])){
$_SESSION['mark']=$_GET['mark'];
}
else{
	$_SESSION['mark']=0;
}

//这里有个bug 
if (isset($_SESSION['begin'])){
	$begin=$_SESSION['begin'];
	if ($_GET['mark']==0){
		$_SESSION['begin']=0;
	}
	else{
	$_SESSION['begin']=$begin+$_SESSION['mark'];
	}
}
else {
	$_SESSION['begin']=0;
}


include "../php/new_title.php";
include "../php/click_amount.php";
include "../php/deal_article.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>文章列表</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../css/article/base.css" rel="stylesheet">
<link href="../css/article/style.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="/skin/2014/js/modernizr.js"></script>
<![endif]-->
<!-- 返回顶部调用 begin -->
<link href="../css/article/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="../js/article/jquery.js"></script>
<script type="text/javascript" src="../js/article/js.js"></script>
<!-- 返回顶部调用 end-->
</head>
<body>
 <header>

</header>
<article class="blogs">
<h1 class="t_nav"><span>越走越慢的生活固然可贵，但是谁又没有一颗少年心呢！</span><a href="../index.php" class="n1">网站首页</a><a href="#" class="n2">文章列表</a></h1>
	 <?php 
	 for ($i=0;$i<10;$i++){
      if (isset($aid[$i])){
	echo "<div class='newblog left'>

<h2><a href='../php/show_article.php?aid=$aid[$i]'>$title[$i]</a></h2>
   <p class='dateview'><span>发布时间：$time[$i]</span><span>作者：$author[$i]</span></p>
    <figure><a title='' href='#' ><img src='$pic[$i]' /></a></figure>
    <ul class='nlist'>
      <p>";content($aid[$i]);echo "....</p>
      <a href='../php/show_article.php?aid=$aid[$i]' title='' target='_blank' class='readmore'>阅读全文>></a>
    </ul>";
 }}?>
   
	
    
    <div class="line"></div>
    <div class="blank"></div>
    <div class="page"><a href="../php/article.php?mark=0&begin=<?php echo $_SESSION['begin']?>">首页</a><a href="../php/article.php?mark=-10&begin=<?php echo $_SESSION['begin']?>"><<</a><a href="../php/article.php?mark=10&begin=<?php echo $_SESSION['begin']?>">>></a></a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--//10个DIV -->



<aside class="right">
     

<div class="blank"></div>
<div class="news" style="margin-top: 0;position:relative;z-index:9999;">

<h3>
      <p>最新<span>文章</span></p>
    </h3>
    <ul class="rank">
     <li><a href="../php/show_article.php?aid=<?php echo $aidb[0];?>" title="" target="_blank"><?php echo $ar[0];?></a></li><li><a href="../php/show_article.php?aid=<?php echo $aidb[1];?>" title="" target="_blank"><?php echo $ar[1];?></a></li><li><a href="../php/show_article.php?aid=<?php echo $aidb[2];?>" title="" target="_blank"><?php echo $ar[2];?></a></li>
<li><a href="../php/show_article.php?aid=<?php echo $aidb[3];?>" title="" target="_blank"><?php echo $ar[3];?></a></li><li><a href="../php/show_article.php?aid=<?php echo $aidb[4];?>" title="" target="_blank"><?php echo $ar[4];?></a></li><li><a href="../php/show_article.php?aid=<?php echo $aidb[5];?>" title="" target="_blank"><?php echo $ar[5];?></a></li></ul>
      <h3 class="ph">
        <p>点击<span>排行</span></p>
      </h3>
      <ul class="paih">
<li><a href="../php/show_article.php?aid=<?php echo $aida[0];?>" title="" target="_blank"><?php echo $ar2[0];?></a></li><li><a href="../php/show_article.php?aid=<?php echo $aida[1];?>" title="" target="_blank"><?php echo $ar2[1];?></a></li><li><a href="../php/show_article.php?aid=<?php echo $aida[2];?>" title="" target="_blank"><?php echo $ar2[2];?></a></li>
<li><a href="../php/show_article.php?aid=<?php echo $aida[3];?>" title="" target="_blank"><?php echo $ar2[3];?></a></li><li><a href="../php/show_article.php?aid=<?php echo $aida[4];?>" title="" target="_blank"><?php echo $ar2[4];?></a></li>      </ul>
</div>
   


</aside>
</article>

<footer>
  <p>Design by dream-heart</p>
</footer>


</body>
</html>
