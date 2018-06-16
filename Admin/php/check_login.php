<?php 
session_start();
include "../php/conn.php";
header("Content-type: text/html; charset=utf-8"); 
$name=$_POST['username'];
$_SESSION['username']=$name;
$password=$_POST['userpwd'];

$sql="select id from tb_admin where username='$name' and password='$password'";
$res=mysql_query($sql);
$rows=mysql_num_rows($res);
  if($rows){
   header("refresh:0;url=../main.php");//跳转页面，注意路径
   exit;
  }
 
  else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>