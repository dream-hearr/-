<?php
session_start();
include "../php/conn.php";
$user = htmlspecialchars(trim($_POST['user'])); 
$txt = htmlspecialchars(trim($_POST['txt'])); 
$aid=$_SESSION['aid'];

if(empty($user)){ 
   echo "昵称不能为空！"; 
   exit; 
} 
if(empty($txt)){ 
   echo "评论内容不能为空！"; 
   exit; 
} 



$time = date("Y-m-d H:i:s"); 
$timestamp=time(); 

	
$resa=mysql_query("insert into tb_comment(aid,username,date,timestamp)values('$aid','$user','$time','$timestamp')");
if($resa)  	{
	echo "1";  
	}//煞笔



$sql2="select id from tb_comment where timestamp='$timestamp'";
	$res2=mysql_query($sql2);
	if ($res2){
		$c_id=mysql_fetch_array($res2);
	}


	$id_c=$c_id['id'];
	$trace="../message/comments/".$c_id['id'].".txt";
	$trace2="../htdocs/message/comments/".$c_id['id'].".txt";


	$file=fopen("$trace","w");
	$message=$txt;
	fwrite($file,$message);
	fclose($file);
	
	
	$sql3="update tb_comment set comment_url='$trace2' where id='$id_c'";
	mysql_query($sql3);
	
	$sql4="update tb_article set comment_number=comment_number+1 where aid='$aid'";
	mysql_query($sql4);


	//header("refresh:1;url=../index.php");//跳转页面，注意路径
?>

