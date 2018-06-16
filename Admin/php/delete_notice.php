<?php
include "../php/conn.php";
$nid=$_GET['nid'];
$sqla="delete from tb_notice where nid='$nid'";
$res1=mysql_query($sqla);
  if($res1){
	 header("refresh:0;url=../notice.php");//跳转页面，注意路径
	}
else{
	echo "no";
}
?>