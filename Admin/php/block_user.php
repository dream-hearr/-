<?php
include "../php/conn.php";
$id=$_GET['id'];
$sql="update tb_user set block='0' where id='$id'";

$res=mysql_query($sql);

  if($res){
	 header("refresh:0;url=../manage-user.php");//跳转页面，注意路径
	}
else{
	echo "no";
}
?>