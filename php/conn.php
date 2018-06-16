<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("blog",$link);
mysql_query("SET names UTF8");
//header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set('prc');
?>