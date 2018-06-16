<?php
include "conn.php";
header("Content-type: text/html; charset=utf-8"); 
$sql="select title from tb_article order by time desc limit 6";
$sqlb="select aid from tb_article order by time desc limit 6";

$res=mysql_query($sql);
$rows=mysql_num_rows($res);
  if($rows){
	$ar = array();
	while($rows=mysql_fetch_array($res)){
  		$ar[] = $rows['title'];//把title存放到数组里
	}
}

$resb=mysql_query($sqlb);
$rowsb=mysql_num_rows($resb);
  if($rowsb){
	$aidb = array();
	while($rowsb=mysql_fetch_array($resb)){
  		$aidb[] = $rowsb['aid'];//把aid存放到数组里
	}
}


?>