<?php

session_start();

unset($_SESSION['begin']);
unset($_SESSION['mark']);
include "../php/new_title.php";
include "../php/click_amount.php";
include "../php/read_article.php";
include "../php/deal_comment.php";
$aid=$_GET['aid'];
$_SESSION['aid']=$aid;



if (isset($_SESSION['begin'])){
unset($_SESSION['begin']);
}

?>


<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>文章详情</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link href="../../css/show_article/base3.css" rel="stylesheet">
<link href="../../css/show_article/new3.css" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="/skin/2014/js/modernizr.js"></script>
<![endif]-->
<!-- 返回顶部调用 begin -->
<link href="../../css/show_article/lrtk3.css" rel="stylesheet">
	
<style type="text/css">
h3{font-size:14px} 
#comments{margin:10px auto} 
#post{margin-top:10px} 
#comments p,#post p{line-height:30px} 
#comments p span{margin:4px; color:#999} 
#message{position:relative; display:none; margin-top:-100px; margin-left:30px;  
background:#369; color:#fff; z-index:1001}
</style>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	var comments = $("#comments");
	$.getJSON("server.php",function(json){
		$.each(json,function(index,array){
			var txt = "<p><strong>"+array["id"]+"</strong>："+array["username"]+"<span>"+array["date"]+"</span></p>";
			comments.append(txt);
		});
	});
	
	$("#add").click(function(){
		var user = $("#user").val();
		var txt = $("#txt").val();
		$.ajax({
             type: "POST",
             url: "../php/comment.php",
             data: "user="+user+"&txt="+txt,
             success: function(msg){
				if(msg==1){
				   var str = "<p><strong>"+user+"</strong>："+txt+"<span>刚刚</span></p>";
	               comments.append(str);
				   $("#message").show().html("发表成功！").fadeOut(1000);
				   $("#txt").attr("value","");
				}else{
				   $("#message").show().html("发表失败！").fadeOut(1000);
			    }
             }
	    });
	});
});
</script>

<script type="text/javascript" src="../js/show_article/jquery.js"></script>
<script type="text/javascript" src="../../js/show_article/js.js"></script>
<!-- 返回顶部调用 end-->
</head>
<body><div id="BAIDU_DUP_fp_wrapper" style="position: absolute; left: -1px; bottom: -1px; z-index: 0; width: 0px; height: 0px; overflow: hidden; visibility: hidden; display: none;"><iframe id="BAIDU_DUP_fp_iframe" src="#" style="width: 0px; height: 0px; visibility: hidden; display: none;"></iframe></div>
 <header>


  
</header>
<article class="blogs">
  <h1 class="t_nav"><span>你好啊</span><a href="httP://localhost:8099" class="n1">网站首页</a><a href="#" class="n2">文章详情</a></h1>
  <div class="index_about">
    <h2 class="c_titile"><?php echo $arr1['title'];?></h2>
    <p class="box_c"><span class="d_time">发布时间：<?php echo $arr1['time'];?></span><span>编辑：<a href="#"><?php echo $arr1['author'];?></a></span><span>阅读<script src="#"></script><?php echo $arr1['click_amount'];?></span></p>
    <ul class="infos">
      <p>
<?php include "../php/read_article_content.php";?>
</p>
<p><img src="<?php echo $arr2['url'];?>" alt="" width="400" height="290"></p><p align="center" class="pageLink"></p>

    </ul>
    <div class="ad"><script type="text/javascript">
/*自定义标签云myqq，创建于2013-8-2*/
var cpro_id = "u1335521";
</script>





</div>
    <div class="otherlink">
      <h2></h2>
<div id="main">
<div class="demo">
<div id="comments"> 
  	<?php 
  		if (isset($_SESSION['username'])){
  			$name=$_SESSION['username'];
     echo "<h3>读取评论</h3>";
	echo "<hr />";
     
    $n=$sum['sum_comment'];
	 for ($i=0;$i<$n;$i++){
      if (isset($id[$i])){
      	$mark=$i+1;
      	echo "<br />";
	echo "<h3 class='dateview'><span>($mark)用户：$username[$i]</span>";
   	echo "<br />";echo "内容：";content($id[$i]);
   	echo "<div>发表时间：$date[$i]</div>
 </h3>"; echo "<br />.<hr />";}}

echo "</div> 
  <div id='post'> 
     <h3>发表评论</h3> 
     <input style='visibility: hidden;' type='text' class='input' id='user' value='$name'/>
     <p>评论内容：</p> 
     <p><textarea class='input' id='txt' style='width:98%; height:120px'></textarea></p> 
     <p><input type='submit' value='发表' id='add' /></p> 
     <div id='message'></div> 
</div>";
 }
 else {
 	echo "<h3>您未登录，无法查看文章评论。<a href='login.php' style='color: red;'>点击登陆</a></h3>";
 	echo "</div>"; //还是不懂哪里错了 233333
 }?>

</div>


 



    </div>

<div class="blank"></div>
<div class="ad">
<script type="text/javascript">
var cpro_id="u2064486";
(window["cproStyleApi"] = window["cproStyleApi"] || {})[cpro_id]={at:"3",rsi0:"700",rsi1:"250",pat:"6",tn:"baiduCustNativeAD",rss1:"#FFFFFF",conBW:"1",adp:"1",ptt:"0",titFF:"%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91",titFS:"",rss2:"#000000",titSU:"0",ptbg:"90",piw:"0",pih:"0",ptp:"0"}
</script>
</div></div>

  </div>
  <aside class="right">


<div class="blank"></div>
    <div class="news">
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
</article>
<footer>
  <p>Design by dream-heart</p>
</footer>
<!--<p id="stat"><script type="text/javascript" src="http://js.tongji.linezing.com/1870888/tongji.js"></script></p>-->
</body>
</html>





