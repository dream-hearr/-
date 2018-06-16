<?php
include "../php/conn.php";

header("Content-type: text/html; charset=utf-8"); 
$sql="select count(nid) as sum_notice from tb_notice";
$sql1="select nid from tb_notice order by date desc";
$sql2="select title from tb_notice order by date desc";
$sql3="select date from tb_notice order by date desc";


$res=mysql_query($sql);
$rows=mysql_num_rows($res);
if ($rows){
	$sum=mysql_fetch_array($res);
}

$res1=mysql_query($sql1);
$rows1=mysql_num_rows($res1);
  if($rows1){
	$nid = array();
	while($rows1=mysql_fetch_array($res1)){
  		$nid[] = $rows1['nid'];//把nid存放到数组里
	}
}

$res2=mysql_query($sql2);
$rows2=mysql_num_rows($res2);
  if($rows2){
	$title = array();
	while($rows2=mysql_fetch_array($res2)){
  		$title[] = $rows2['title'];//title存放到数组里
	}
}

$res3=mysql_query($sql3);
$rows3=mysql_num_rows($res3);
  if($rows3){
	$date = array();
	while($rows3=mysql_fetch_array($res3)){
  		$date[] = $rows3['date'];//把date存放到数组里
	}
}


?>