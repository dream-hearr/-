<?php
include "../php/conn.php";
$begin=$_SESSION['begin'];
if ($begin<0){
	$begin=0;
	$_SESSION['begin']=0;
}
$end=$begin+7;
header("Content-type: text/html; charset=utf-8"); 
$sql1="select title from tb_article order by time desc limit $begin,$end";
$sql2="select comment_number from tb_article order by time desc limit $begin,$end";

$sql4="select time from tb_article order by time desc limit $begin,$end";

$sql7="select aid from tb_article order by time desc limit $begin,$end";

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
	$comment_number = array();
	while($rows2=mysql_fetch_array($res2)){
  		$comment_number[] = $rows2['comment_number'];//把comment_number存放到数组里
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



$res7=mysql_query($sql7);
$rows7=mysql_num_rows($res7);
  if($rows7){
	$aid = array();
	while($rows7=mysql_fetch_array($res7)){
  		$aid[] = $rows7['aid'];//aid存放到数组里
	}
}







?>