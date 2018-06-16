<?php 
session_start();
include "../php/conn.php";
header("Content-type: text/html; charset=utf-8"); 

$name=$_POST['username'];
$_SESSION['username']=$name;
$password=$_POST['password'];
$bir=$_POST['birthday'];
$mail=$_POST['mail'];
$sex=$_POST['sex'];
$city=$_POST['city'];
$register_time=date("Y-m-d H:i:s");

if(strlen($password) < 6){
     exit('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
	}
	
if(!preg_match('/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/', $mail)){
     exit('错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a>');
 	}
 	
$check_query = mysql_query("select id from tb_user where name='$name' limit 1");
if(mysql_fetch_array($check_query)){
    echo '错误：用户名 ',$name,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
    exit;
}

if ($sex=='男'){
	$sex_n=1;
}

else{
	$sex_n=0;
}

$sql="insert into tb_user(name,password,birthday,mail,sex,city,register_time) values ('$name','$password','$bir','$mail','$sex_n','$city','$register_time')";
  if(mysql_query($sql)){
   header("refresh:0;url=../index.php");//跳转页面，注意路径
   exit;
 }
?>