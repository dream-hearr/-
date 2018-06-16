<?php
session_start();
include "../php/conn.php";
if (isset($_SESSION['username'])){
$name=$_POST['name'];
$relname=$_SESSION['username'];

$mail=$_POST['email'];
$message=$_POST['message'];
$date=date("Y-m-d H:i:s");  //时间戳有毛病

$timestamp=time(); 

if(!preg_match('/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/', $mail)){
     exit('错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a>');
 	}
 	
$sql="insert into tb_contact(name,relname,email,date,timestamp) values ('$name','$relname','$mail','$date','$timestamp')";
$res=mysql_query($sql);
if ($res){
	$sql2="select cid from tb_contact where timestamp='$timestamp'";
	$res2=mysql_query($sql2);
	if ($res2){
		$cid=mysql_fetch_array($res2);
	}


	$trace="../message/contact/".$cid['cid'].".txt";
	$trace2="../htdocs/message/contact/".$cid['cid'].".txt";
	$cid2=$cid['cid'];

	$file=fopen("$trace","w");
	$txt=$message;
	fwrite($file,$txt);
	fclose($file);
	
	
	$sql3="update tb_contact set contact_url='$trace2' where cid='$cid2'";
	mysql_query($sql3);
	header("refresh:1;url=../index.php");//跳转页面，注意路径
	

//输出留言
	/*$sq4="select contact_url from tb_contact where cid='$cid2'";
	$res4=mysql_query($sq4);
	if ($res4){
	$arr4=mysql_fetch_array($res4);
	$url4=$arr4['contact_url'];
	$file=fopen("$url4","r");
	echo  fgets($file);
	fclose($file);
	}
	else {
		echo "die";
	}
	*/

}
}

else{
	echo "<script>alert('请先登录！');</script>";
}
?>