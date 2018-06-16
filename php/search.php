<?php
	
include "../php/conn.php";
header("Content-type: text/html; charset=utf-8"); 
$text=$_POST['text'];
$sql="select aid from tb_article where title like '%$text%'";
$res=mysql_query($sql);
$rows=mysql_num_rows($res);
if ($rows){
	$aid = array();
	while($rows=mysql_fetch_array($res)){
  		$aid[] = $rows['aid'];//把aid存放到数组里
	}
	$n=sizeof($aid);
	$new=implode(",",$aid);   //数组转化为字符串
		 





$sql1="select title from tb_article where aid in ($new)";
$sql2="select article_url from tb_article where aid in ($new)";
$sql3="select author from tb_article where aid in ($new)";
$sql4="select time from tb_article where aid in ($new)";

$sql5="select url from tb_pic,tb_article where tb_article.aid in ($new) and tb_pic.aid=tb_article.aid"; //真的蠢



$res1=mysql_query($sql1);
$rows1=mysql_num_rows($res1);
  if($rows1){
	$title = array();
	while($rows1=mysql_fetch_array($res1)){
  		$title[] = $rows1['title'];//把title存放到数组里
	}
}

$res2=mysql_query($sql2);
$rows2=mysql_num_rows($res2);
  if($rows2){
	$article_url = array();
	while($rows2=mysql_fetch_array($res2)){
  		$article_url[] = $rows2['article_url'];//把article_url存放到数组里
	}
}

$res3=mysql_query($sql3);
$rows3=mysql_num_rows($res3);
  if($rows3){
	$author = array();
	while($rows3=mysql_fetch_array($res3)){
  		$author[] = $rows3['author'];//把author存放到数组里
	}
}

$res4=mysql_query($sql4);
$rows4=mysql_num_rows($res4);
  if($rows4){
	$time = array();
	while($rows4=mysql_fetch_array($res4)){
  		$time[] = $rows4['time'];//把time存放到数组里
	}
}





$res5=mysql_query($sql5);
$rows5=mysql_num_rows($res5);
  if($rows5){
	$pic = array();
	while($rows5=mysql_fetch_array($res5)){
  		$pic[] = $rows5['url'];//把图片url存放到数组里
	}
}

function content($aid){
	
	$url="../message/article/".$aid.".txt";
	$files=fopen("$url","r");
	
	for ($i=0;$i<2;$i++){
		$url2=fgets($files);
		echo $url2;
	}
	fclose($files);

}


}
else {
	$n=0;
}



?>