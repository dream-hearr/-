<?php 
session_start();
include "conn.php";
header("Content-type: text/html; charset=utf-8"); 
$name=$_POST['username'];
$_SESSION['username']=$name;
$password=$_POST['password'];
$sql="select block from tb_user where name='$name' and password='$password'";
$res=mysql_query($sql);
$rows=mysql_num_rows($res);
  if($rows){
  $block=mysql_fetch_array($res);
  if ($block['block']==1){
   header("refresh:0;url=../index.php");//跳转页面，注意路径
   exit;
  }
  else {
  	unset($_SESSION['username']);
  	echo "<script>alert('您已被封禁，不能登陆！');</script>";
  	header("refresh:0;url=../index.php");//跳转页面，注意路径；也可以用block_user视图实现
   exit;
  }
 }
 
  else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>