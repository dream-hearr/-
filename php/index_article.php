<?php
include "conn.php";
header("Content-type: text/html; charset=utf-8"); 
$sql1="select title from tb_article order by comment_number+click_amount/2 desc limit 6";
$sql2="select article_url from tb_article order by comment_number+click_amount/2 desc limit 6";
$sql3="select author from tb_article order by comment_number+click_amount/2 desc limit 6";
$sql4="select time from tb_article order by comment_number+click_amount/2 desc limit 6";
$sql5="select comment_number from tb_article order by comment_number+click_amount/2 desc limit 6";
$sql6="select click_amount from tb_article order by comment_number+click_amount/2 desc limit 6";
$sql7="select aid from tb_article order by comment_number+click_amount/2 desc limit 6";

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
	$comment_number = array();
	while($rows5=mysql_fetch_array($res5)){
  		$comment_number[] = $rows5['comment_number'];//把comment_number存放到数组里
	}
}

$res6=mysql_query($sql6);
$rows6=mysql_num_rows($res6);
  if($rows6){
	$click_amount = array();
	while($rows6=mysql_fetch_array($res6)){
  		$click_amount[] = $rows6['click_amount'];//把click_amount存放到数组里
	}
}

$res7=mysql_query($sql7);
$rows7=mysql_num_rows($res7);
  if($rows7){
	$aid = array();
	while($rows7=mysql_fetch_array($res7)){
  		$aid[] = $rows7['aid'];//aid存放到数组里
	}
}

?>