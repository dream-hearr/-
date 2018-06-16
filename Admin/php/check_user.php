<?php
include "../php/conn.php";

header("Content-type: text/html; charset=utf-8"); 
$sql="select count(id) as sum_user from tb_user";
$sql1="select id from tb_user order by register_time desc";
$sql2="select name from tb_user order by register_time desc";
$sql3="select register_time from tb_user order by register_time desc";
$sql4="select block from tb_user order by register_time desc";

$res=mysql_query($sql);
$rows=mysql_num_rows($res);
if ($rows){
	$sum=mysql_fetch_array($res);
}

$res1=mysql_query($sql1);
$rows1=mysql_num_rows($res1);
  if($rows1){
	$id = array();
	while($rows1=mysql_fetch_array($res1)){
  		$id[] = $rows1['id'];//把id存放到数组里
	}
}

$res2=mysql_query($sql2);
$rows2=mysql_num_rows($res2);
  if($rows2){
	$name = array();
	while($rows2=mysql_fetch_array($res2)){
  		$name[] = $rows2['name'];//把name存放到数组里
	}
}

$res3=mysql_query($sql3);
$rows3=mysql_num_rows($res3);
  if($rows3){
	$register_time = array();
	while($rows3=mysql_fetch_array($res3)){
  		$register_time[] = $rows3['register_time'];//把register_time存放到数组里
	}
}

$res4=mysql_query($sql4);
$rows4=mysql_num_rows($res4);
  if($rows4){
	$block = array();
	while($rows4=mysql_fetch_array($res4)){
  		$block[] = $rows4['block'];//把block存放到数组里
	}
}

?>