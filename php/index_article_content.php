<?php
	
//路径真的很重要啊   啊啊啊  $url="../htdocs/message/article/0.txt";
function content($aid){
include "php/conn.php";
$qu="select article_url from tb_article where aid='$aid'";
$out=mysql_query($qu);
if ($out){
	$arr3=mysql_fetch_array($out);
	$url=$arr3['article_url'];
	$files=fopen("$url","r");
	
	for ($i=0;$i<2;$i++){
		$url2=fgets($files);
		echo $url2;
	}
	fclose($files);

}
else{
echo "die";
}


}



?>