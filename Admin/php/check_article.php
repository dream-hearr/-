<?php
session_start();
include "../php/conn.php";
header("Content-type: text/html; charset=utf-8"); 

$author=$_SESSION['username'];

$title=$_POST['title'];
$content=$_POST['content'];
$time=date("Y-m-d H:i:s");   //时间戳有毛病

$timestamp=time(); 

$sql="insert into tb_article(title,time,author,timestamp) values ('$title','$time','$author','$timestamp')";
$res=mysql_query($sql);
if ($res){
	$sql2="select aid from tb_article where timestamp='$timestamp'";
	$res2=mysql_query($sql2);
	if ($res2){
		$aid=mysql_fetch_array($res2);
	

	$trace="../../message/article/".$aid['aid'].".txt";   //../../
	$trace2="../htdocs/message/article/".$aid['aid'].".txt";
	$aid2=$aid['aid'];

	$file=fopen("$trace","w");
	$txt=$content;
	fwrite($file,$txt);
	fclose($file);
	
	
	$sql3="update tb_article set article_url='$trace2' where aid='$aid2'";
	mysql_query($sql3);	
	}
}


//图片



if ((($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/gif"))
&& ($_FILES["file"]["size"] < 200000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else{
    //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    //echo "Type: " . $_FILES["file"]["type"] . "<br />";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";


      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../../upload_pic/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "../upload_pic/" . $_FILES["file"]["name"]."<br />";
      $url="../upload_pic/" . $_FILES["file"]["name"];
      //echo $url;
      
      $name=$_FILES["file"]["name"];
      $type=$_FILES["file"]["type"];
      $author=$_SESSION['username'];
      $date=date("Y.m.d");
      $sql="insert into tb_pic(name,url,type,author,date,aid) values ('$name','$url','$type','$author','$date','$aid2')";
      mysql_query($sql);
      }
  
  }
else
  {
  echo "Invalid file";
  }
  
  
  	header("refresh:1;url=../article.php");//跳转页面，注意路径



?>