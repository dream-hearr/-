<?php
include "conn.php";
header("Content-type: text/html; charset=utf-8"); 
$sql="select url from tb_pic,tb_article where tb_pic.aid=tb_article.aid
order by tb_article.comment_number+tb_article.click_amount/2 desc limit 7";
$res=mysql_query($sql);
$rows=mysql_num_rows($res);
  if($rows){
	$pic = array();
	while($rows=mysql_fetch_array($res)){
  		$pic[] = $rows['url'];//把url存放到数组里
	}
}
?>