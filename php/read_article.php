<?php
$aid=$_GET['aid'];
if (isset($aid)) {
$sql_add="update tb_article set click_amount=click_amount+1 where aid='$aid'";
$res_add=mysql_query($sql_add);
$sq="select * from tb_article where aid='$aid'";
$re=mysql_query($sq);
$arr1=mysql_fetch_array($re);
$sq2="select url from tb_pic where aid='$aid'";
$re2=mysql_query($sq2);
$arr2=mysql_fetch_array($re2);
}

?>
