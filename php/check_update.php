<?php 
session_start();
include "../php/conn.php";
header("Content-type: text/html; charset=utf-8"); 


$username=$_SESSION['username'];
$password=$_POST['password'];
$bir=$_POST['birthday'];
$mail=$_POST['mail'];
$sex=$_POST['sex'];
$city=$_POST['city'];


if(strlen($password) < 6){
     exit('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
	}
	
if(!preg_match('/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/', $mail)){
     exit('错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a>');
 	}
 	


if ($sex=='男'){
	$sex_n=1;
}

else{
	$sex_n=0;
}


$sql1="update tb_user set password='$password',birthday='$bir',
	  mail='$mail',sex='$sex_n',city='$city' where name='$username'";
  if(mysql_query($sql1)){
   header("refresh:0;url=../index.php");//跳转页面，注意路径
   exit;
 }
?>