<?php
include "../php/conn.php";

header("Content-type: text/html; charset=utf-8"); 
$sql="select count(cid) as sum_contact from tb_contact";
$sql1="select cid from tb_contact order by date desc";
$sql2="select relname from tb_contact order by date desc";
$sql3="select date from tb_contact order by date desc";


$res=mysql_query($sql);
$rows=mysql_num_rows($res);
if ($rows){
	$sum=mysql_fetch_array($res);
}

$res1=mysql_query($sql1);
$rows1=mysql_num_rows($res1);
  if($rows1){
	$cid = array();
	while($rows1=mysql_fetch_array($res1)){
  		$cid[] = $rows1['cid'];//把cid存放到数组里
	}
}

$res2=mysql_query($sql2);
$rows2=mysql_num_rows($res2);
  if($rows2){
	$relname = array();
	while($rows2=mysql_fetch_array($res2)){
  		$relname[] = $rows2['relname'];//relname存放到数组里
	}
}

$res3=mysql_query($sql3);
$rows3=mysql_num_rows($res3);
  if($rows3){
	$date = array();
	while($rows3=mysql_fetch_array($res3)){
  		$date[] = $rows3['date'];//把date存放到数组里
	}
}



function content($cid){
	

	$trace="../message/contact/".$cid.".txt";

	$files=fopen("$trace","r");
		
	$res=fread($files,filesize($trace));
	echo $res;
	fclose($files);
}

?>