<?php
include "../php/conn.php";
$id=$_GET['id'];

$sqla="select aid from tb_comment where id='$id'";
$res1=mysql_query($sqla);
{
	if ($res1){
		$arr1=mysql_fetch_array($res1);
	}
}

$aid=$arr1['aid'];

$sqlb="update tb_article set comment_number=comment_number-1 where aid='$aid'";
$res2=mysql_query($sqlb);
  if($res2){
  	 $sqlc="delete from tb_comment where id='$id'";
  	 $res3=mysql_query($sqlc);
  	 	if ($res3){
	 header("refresh:0;url=../comment.php");//跳转页面，注意路径
	 }
	}
else{
	echo "no";
}
?>
