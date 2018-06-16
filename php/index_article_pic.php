<?php
include "conn.php";
header("Content-type: text/html; charset=utf-8"); 
$sqla="select title from tb_article order by comment_number+click_amount/2 desc limit 5";
$sqlb="select url from tb_pic,tb_article where tb_pic.aid=tb_article.aid
order by tb_article.comment_number+tb_article.click_amount/2 desc limit 5";
$sqlc="select author from tb_article order by comment_number+click_amount/2 desc limit 5";
$sqld="select time from tb_article order by comment_number+click_amount/2 desc limit 5";

$resa=mysql_query($sqla);
$rowsa=mysql_num_rows($resa);
  if($rowsa){
	$title2 = array();
	while($rowsa=mysql_fetch_array($resa)){
  		$title2[] = $rowsa['title'];//把title存放到数组里
	}
}

$resb=mysql_query($sqlb);
$rowsb=mysql_num_rows($resb);
  if($rowsb){
	$url2 = array();
	while($rowsb=mysql_fetch_array($resb)){
  		$url2[] = $rowsb['url'];//把url存放到数组里
	}
}

$resc=mysql_query($sqlc);
$rowsc=mysql_num_rows($resc);
  if($rowsc){
	$author2 = array();
	while($rowsc=mysql_fetch_array($resc)){
  		$author2[] = $rowsc['author'];//把author存放到数组里
	}
}

$resd=mysql_query($sqld);
$rowsd=mysql_num_rows($resd);
  if($rowsd){
	$time2 = array();
	while($rowsd=mysql_fetch_array($resd)){
  		$time2[] = $rowsd['time'];//把time存放到数组里
	}
}

?>