<?php
include "../php/conn.php";
$cid=$_GET['cid'];
$sqla="delete from tb_contact where cid='$cid'";
$res1=mysql_query($sqla);
  if($res1){
	 header("refresh:0;url=../contact.php");//跳转页面，注意路径
	}
else{
	echo "no";
}
?>