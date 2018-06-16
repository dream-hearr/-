<?php
include "../php/conn.php";
$aid=$_GET['aid'];
$sqla="delete from tb_article where aid='$aid'";
$sqlb="delete from tb_pic where aid='$aid'";
$res1=mysql_query($sqla);
$res2=mysql_query($sqlb);
  if($res1&&$res2){
	 header("refresh:0;url=../article.php");//跳转页面，注意路径
	}
else{
	echo "no";
}
?>