<?php
	session_start();
	session_destroy();
	header("refresh:0;url=../index.php");//跳转页面，注意路径
?>