<?php
session_start();
include "../php/conn.php";
header("Content-type: text/html; charset=utf-8"); 
$username=$_SESSION['username'];	
$aid=$_GET['aid'];
$title=$_POST['title'];
$content=$_POST['content'];


$sql="update tb_article set title='$title' where aid='$aid'";  //''的重要性
$res=mysql_query($sql);
if ($res){

	$trace="../../message/article/".$aid.".txt";
	$trace2="../htdocs/message/article/".$aid.".txt";


	$file=fopen("$trace","w");
	$txt=$content;
	fwrite($file,$txt);
	fclose($file);
	
	
	$sql3="update tb_article set article_url='$trace2' where aid='$aid'";
	mysql_query($sql3);
}



if ((($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/gif"))
&& ($_FILES["file"]["size"] < 2000000))
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
 
      $sql="update tb_pic set url='$url' where aid='$aid'";
      mysql_query($sql);
    }
  }

  
  
  
  
	header("refresh:1;url=../article.php");//跳转页面，注意路径
?>