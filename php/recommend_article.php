<?php
include "conn.php";
header("Content-type: text/html; charset=utf-8"); 
$sql="select title from tb_article order by comment_number+click_amount/2 desc limit 6";
$sqlc="select aid from tb_article order by comment_number+click_amount/2 desc limit 6";

$res=mysql_query($sql);
$rows=mysql_num_rows($res);
  if($rows){
	$ar3 = array();
	while($rows=mysql_fetch_array($res)){
  		$ar3[] = $rows['title'];//把title存放到数组里
	}
}


$resc=mysql_query($sqlc);
$rowsc=mysql_num_rows($resc);
  if($rowsc){
	$aidc = array();
	while($rowsc=mysql_fetch_array($resc)){
  		$aidc[] = $rowsc['aid'];//把aid存放到数组里
	}
}

?>