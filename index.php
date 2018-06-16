<?php 
include "php/head.php";
include "php/new_title.php";
include "php/click_amount.php";
include "php/recommend_article.php";
include "php/index_article.php";
include "php/index_article_content.php";
include "php/location.php";
include "php/article_pic.php";
include "php/index_article_pic.php";
include "php/index_notice.php";

//BUG已解决 解决日期：2017.6.19
if (isset($_SESSION['begin'])){
unset($_SESSION['begin']);
}

if (isset($_SESSION['mark'])){
unset($_SESSION['mark']);

}
?>
<!doctype html>
<html>
<head>
	<link href="css/search.css" rel="stylesheet" />
</head>
<body>
<article>
  <div class="l_box f_l">
    <div class="banner">
      <div id="slide-holder">
        <div id="slide-runner"> <a href="/" target="_blank"><img id="slide-img-1" src="images/index/a1.jpg"  alt="" /></a> <a href="/" target="_blank"><img id="slide-img-2" src="images/index/a2.jpg"  alt="" /></a> <a href="/" target="_blank"><img id="slide-img-3" src="images/index/a3.jpg"  alt="" /></a> <a href="/" target="_blank"><img id="slide-img-4" src="images/index/a4.jpg"  alt="" /></a>
          <div id="slide-controls">
            <p id="slide-client" class="text"><strong></strong><span></span></p>
            <p id="slide-desc" class="text"></p>
            <p id="slide-nav"></p>
          </div>
        </div>
      </div>
      <script>
	  if(!window.slider) {
		var slider={};
	}

	slider.data= [
    {
        "id":"slide-img-1", // 与slide-runner中的img标签id对应
        "client":"春->",
        "desc":"春天很舒适，小部分人在吃雪糕，雪糕的颜色很多彩，像少女的指甲。" //这里修改描述
    },
    {
        "id":"slide-img-2",
        "client":"夏->",
        "desc":"夏天很热，大部分的人在吃雪糕，雪糕的味道很甜，很凉爽。"
    },
    {
        "id":"slide-img-3",
        "client":"秋->",
        "desc":"秋天很浪漫，仍旧很多人在吃雪糕，雪糕的味道很醉人，像少年的酒窝。"
    },
    {
        "id":"slide-img-4",
        "client":"冬",
        "desc":"冬天很冷，较少的人在吃雪糕，雪糕的颜色很亮，很刺眼。"
    } 
	];

	  </script> 
    </div>
    <!-- banner代码 结束 -->
    <div class="topnews">
      <h2><span><a href="/" target="_blank"><?php echo date("Y.m.d");?></a><a href="/" target="_blank"></a><a href="weather_query/index.html" target="_blank" style="color: red;">天气查询</a></span><b>文章</b>推荐</h2>
       <div class="blogs">
        <figure><img src="images/公告.jpg" /></figure> 
        <ul>
          <h3><a href="#"><div style="color: red;display: inline;">【最新公告】</div><?php echo $arra['title'];?></a></h3>
           <p><?php echo $content;?></a></p>
          <p class="autor"><span class="lm f_l"><a href='/'><?php echo $arra['publisher'];?></a></a></span><span class="dtime f_l"><?php echo $arra['date'];?></a></span></p>
        </ul>
      </div>
      <?php 
      	for ($i=0;$i<6;$i++){
      		if (isset($aid[$i])){
      echo "<div class='blogs'>
        <figure><img src='$pic[$i]' /></figure> 
        <ul>
          <h3><a href='php/show_article.php?aid=$aid[$i]'>$title[$i]</a></h3>
           <p>";content($aid[$i]);echo "....</p>
          <p class='autor'><span class='lm f_l'><a href='/'>$author[$i]</a></span><span class='dtime f_l'>$time[$i]</span><span class='viewnum f_r'>浏览（<a href='/'>$click_amount[$i]</a>）</span><span class='pingl f_r'>评论（<a href='/'>$comment_number[$i]</a>）</span></p>
        </ul>
      </div>";}
      }?>
      
      
    </div>
  </div>

<form action="php/search_result.php" method="post">
<table border="0" align="center" cellpadding="0" cellspacing="0" class="tab_search">
  <tr>
		<td>
			<input type="text" name="text" title="Search" class="searchinput" id="searchinput" onkeydown="if (event.keyCode==13) {}" onblur="if(this.value=='')value='- 美好生活就从搜索开始吧 -';" onfocus="if(this.value=='- 美好生活就从搜索开始吧 -')value='';" value="- 美好生活就从搜索开始吧 -" size="10"/>
		</td>
		<td>
			<input type="image" width="15" height="17" class="searchaction" onclick="if(document.forms['search'].searchinput.value=='- 美好生活就从搜索开始吧 -')document.forms['search'].searchinput.value='';" alt="Search" src="images/magglass.gif" border="0" hspace="2"/>
		</td>
	</tr>
</table>
</form>
<br /><br />
  <div class="r_box f_r"> 
    <div class="tit01">
      <h3 style="">关注我</h3>



      <div class="gzwm">
        <ul>
          <li><a class="xlwb" href="http://weibo.com/5701271884/profile?rightmod=1&wvr=6&mod=personinfo&is_all=1" target="_blank">新浪微博</a></li>
          <li><a class="txwb" href="https://www.zhihu.com/people/xiao-bai-82-47/activities" target="_blank">知乎</a></li>
          <li><a class="rss" href="http://tieba.baidu.com/home/main?id=aca2cab2c3b4ced2b2bbc3c8ec7e&fr=userbar&red_tag=e3394272003" target="_blank">贴吧</a></li>
          <li><a class="wx" href="https://music.163.com/#/user/home?id=305263640">网易云</a></li>
        </ul>
      </div>
    </div>
    <!--tit01 end-->
    <div class="ad300x100"> <img src="images/index/ad.jpg" /> </div>
    <div class="moreSelect" id="lp_right_select"> 
      <script>
window.onload = function ()
{
	var oLi = document.getElementById("tab").getElementsByTagName("li");
	var oUl = document.getElementById("ms-main").getElementsByTagName("div");
	
	for(var i = 0; i < oLi.length; i++)
	{
		oLi[i].index = i;
		oLi[i].onmouseover = function ()
		{
			for(var n = 0; n < oLi.length; n++) oLi[n].className="";
			this.className = "cur";
			for(var n = 0; n < oUl.length; n++) oUl[n].style.display = "none";
			oUl[this.index].style.display = "block"
		}
	}
}
</script>
      <div class="ms-top">
        <ul class="hd" id="tab">
          <li class="cur"><a href="/">点击排行</a></li>
          <li><a href="/">最新文章</a></li>
          <li><a href="/">站长推荐</a></li>
        </ul>
      </div>
      <div class="ms-main" id="ms-main">
        <div style="display: block;" class="bd bd-news" >
          <ul>
            <li><a href="php/show_article.php?aid=<?php echo $aida[0];?>" target="_blank"><?php echo $ar2[0]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aida[1];?>" target="_blank"><?php echo $ar2[1]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aida[2];?>" target="_blank"><?php echo $ar2[2]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aida[3];?>" target="_blank"><?php echo $ar2[3]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aida[4];?>" target="_blank"><?php echo $ar2[4]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aida[5];?>" target="_blank"><?php echo $ar2[5]?></a></li>
          </ul>
        </div>
        <div  class="bd bd-news">
          <ul>
            <li><a href="php/show_article.php?aid=<?php echo $aidb[0];?>" target="_blank"><?php echo $ar[0]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aidb[1];?>" target="_blank"><?php echo $ar[1]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aidb[2];?>" target="_blank"><?php echo $ar[2]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aidb[3];?>" target="_blank"><?php echo $ar[3]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aidb[4];?>" target="_blank"><?php echo $ar[4]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aidb[5];?>" target="_blank"><?php echo $ar[5]?></a></li>
          </ul>
        </div>
        <div class="bd bd-news">
          <ul>
            <li><div style="color: black; background-color: deepskyblue;">1</div><a href="php/show_article.php?aid=<?php echo $aidc[0];?>" target="_blank"><?php echo $ar3[0]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aidc[1];?>" target="_blank"><?php echo $ar3[1]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aidc[2];?>" target="_blank"><?php echo $ar3[2]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aidc[3];?>" target="_blank"><?php echo $ar3[3]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aidc[4];?>" target="_blank"><?php echo $ar3[4]?></a></li>
            <li><a href="php/show_article.php?aid=<?php echo $aidc[5];?>" target="_blank"><?php echo $ar3[5]?></a></li>
          </ul>
        </div>
      </div>
      <!--ms-main end --> 
    </div>
    <!--切换卡 moreSelect end -->
    
    <div class="cloud">
      <h3>标签云</h3>
      <ul>
        <li><a href="/">调皮</a></li>
        <li><a href="/">可爱</a></li>
        <li><a href="/">颜值爆表</a></li>
        <li><a href="/">智慧达人</a></li>
        <li><a href="/">能干</a></li>
        <li><a href="/">吃苦耐劳</a></li>
        <li><a href="/">乐于助人</a></li>
        <li><a href="/">小神经</a></li>
        <li><a href="/">爱睡懒觉</a></li>
        <li><a href="/">宅文化</a></li>
        <li><a href="/">懒癌晚期</a></li>
        <li><a href="/">活泼开朗</a></li>
        <li><a href="/">怀揣梦想</a></li>
        <li><a href="/">默默奉献</a></li>
      </ul>
    </div>
    <div class="tuwen">
      <h3>图文推荐</h3>
      <ul>
        <li><a href="/"><img src="<?php echo $url2[4];?>" /><b><a href="php/show_article.php?aid=<?php echo $aid[4];?>"><?php echo $title2[4]?></b></a></a>
          <p><span class="tulanmu"><a href="#"><?php echo $author2[4]?></a></span><span class="tutime"><?php echo $time2[4]?></span></p>
        </li>
        <li><a href="#"><img src="<?php echo $url2[3];?>" /><b><a href="php/show_article.php?aid=<?php echo $aid[3];?>"><?php echo $title2[3]?></b></a></a>
          <p><span class="tulanmu"><a href="/"><?php echo $author2[3]?></a></span><span class="tutime"><?php echo $time2[3]?></span></p>
        </li>
        <li><a href="#"><img src="<?php echo $url2[2];?>" /><b><a href="php/show_article.php?aid=<?php echo $aid[2];?>"><?php echo $title2[2]?></b></a></a>
          <p><span class="tulanmu"><a href="/"><?php echo $author2[2]?></a></span><span class="tutime"><?php echo $time2[2]?></span></p>
        </li>
        <li><a href="#"><img src="<?php echo $url2[1];?>" /><b><a href="php/show_article.php?aid=<?php echo $aid[1];?>"><?php echo $title2[1]?></b></a></a>
          <p><span class="tulanmu"><a href="/"><?php echo $author2[1]?></a></span><span class="tutime"><?php echo $time2[1]?></span></p>
        </li>
        <li><a href="#"><img src="<?php echo $url2[0];?>" /><b><a href="php/show_article.php?aid=<?php echo $aid[0];?>"><?php echo $title2[0]?></b></a></a>
          <p><span class="tulanmu"><a href="/"><?php echo $author2[0]?></a></span><span class="tutime"><?php echo $time2[0]?></span></p>
        </li>
      </ul>
    </div>
    <div class="ad"> <img src="images/index/03_.jpg"> </div>
    <div class="links">
      <h3><span>[<a href="/">申请友情链接</a>]</span>友情链接</h3>
      <ul>
        <li><a href="http://www.google.com/">谷歌（需翻墙）</a></li>
        <li><a href="https://www.baidu.com/">百度</a></li>
        <li><a href="http://cn.bing.com/">必应</a></li>
        <li><a href="https://www.zhihu.com/">知乎</a></li>
        <li><a href="http://weibo.com/login.php">新浪微博</a></li>
        <li><a href="https://tieba.baidu.com">贴吧</a></li>
        <li><a href="https://music.163.com/">网易云</a></li>
      </ul>
    </div>
  </div>
  <!--r_box end --> 
</article>
<footer>
  <p class="ft-copyright">路飞博客 Design by dream-heart</p>
</footer>
</body>
</html>
