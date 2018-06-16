<?php
//界面传值  $aid 
$aid=$_GET['aid'];
$re=mysql_query($sq);
if ($re){
$arr1=mysql_fetch_array($re);

	//$arr=$arr1['article_url'];
	$arr="../message/article/".$aid.".txt";
	$open=fopen("$arr","r");
	$res=fread($open,filesize($arr));
	echo $res;
	fclose($open);
}
else{
	echo "die";
}

?>
