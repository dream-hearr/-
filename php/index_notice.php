<?php
include "php/conn.php";
$sqlx="select nid,title,notice_url,publisher,date from tb_notice order by date desc limit 1";
$resx=mysql_query($sqlx);
if ($resx){
	$arra=mysql_fetch_array($resx);
}
else{
	echo no;
}
	$nid=$arra['nid'];
	$url="message/notice/".$nid.".txt";
	$files=fopen("$url","r");
	$content=fread($files,filesize($url));
	fclose($files);
?>