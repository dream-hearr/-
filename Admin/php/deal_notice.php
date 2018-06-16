<?php
session_start();
include "../php/conn.php";
header("Content-type: text/html; charset=utf-8"); 

$publisher=$_SESSION['username'];

$title=$_POST['title'];
$content=$_POST['content'];
$date=date("Y-m-d H:i:s");  //时间戳有毛病

$timestamp=time(); 

$sql="insert into tb_notice(title,date,publisher,timestamp) values ('$title','$date','$publisher','$timestamp')";
$res=mysql_query($sql);
if ($res){
	$sql2="select nid from tb_notice where timestamp='$timestamp'";
	$res2=mysql_query($sql2);
	if ($res2){
		$nid=mysql_fetch_array($res2);
	

	$trace="../../message/notice/".$nid['nid'].".txt";   //../../
	$trace2="../htdocs/message/notice/".$nid['nid'].".txt";
	$nid2=$nid['nid'];

	$file=fopen("$trace","w");
	$txt=$content;
	fwrite($file,$txt);
	fclose($file);
	
	
	$sql3="update tb_notice set notice_url='$trace2' where nid='$nid2'";
	mysql_query($sql3);	
	}
}
  
  	header("refresh:1;url=../notice.php");//跳转页面，注意路径



?>