<?php
include "conn.php";
header("Content-type: text/html; charset=utf-8"); 
$sql="select title from tb_article order by click_amount desc limit 6";
$sqla="select aid from tb_article order by click_amount desc limit 6";


$res=mysql_query($sql);
$rows=mysql_num_rows($res);
  if($rows){
	$ar2 = array();
	while($rows=mysql_fetch_array($res)){
  		$ar2[] = $rows['title'];//把title存放到数组里
	}
}

$resa=mysql_query($sqla);
$rowsa=mysql_num_rows($resa);
  if($rowsa){
	$aida = array();
	while($rows=mysql_fetch_array($resa)){
  		$aida[] = $rows['aid'];//把aid存放到数组里
	}
}

?>