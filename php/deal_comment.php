<?php
//session_start();
include "../php/conn.php";

if (isset($_SESSION['aid'])){
$aid=$_SESSION['aid'];
}
header("Content-type: text/html; charset=utf-8"); 
$sql="select count(id) as sum_comment from tb_comment where aid='$aid'";
$sql1="select username from tb_comment where aid='$aid' order by date desc";
$sql2="select date from tb_comment where aid='$aid' order by date desc";
$sql3="select id from tb_comment where aid='$aid' order by date desc";

$res=mysql_query($sql);
$rows=mysql_num_rows($res);
if ($rows){
	$sum=mysql_fetch_array($res);
}

$res1=mysql_query($sql1);
$rows1=mysql_num_rows($res1);
  if($rows1){
	$username = array();
	while($rows1=mysql_fetch_array($res1)){
  		$username[] = $rows1['username'];//把username存放到数组里
	}
}

$res2=mysql_query($sql2);
$rows2=mysql_num_rows($res2);
  if($rows2){
	$name = array();
	while($rows2=mysql_fetch_array($res2)){
  		$date[] = $rows2['date'];//把date存放到数组里
	}
}

$res3=mysql_query($sql3);
$rows3=mysql_num_rows($res3);
  if($rows3){
	$id = array();
	while($rows3=mysql_fetch_array($res3)){
  		$id[] = $rows3['id'];//把id存放到数组里
	}
}

function content($id){
	

	$trace="../message/comments/".$id.".txt";

	$files=fopen("$trace","r");
		
	$res=fread($files,filesize($trace));
	echo $res;
	fclose($files);
}


?>