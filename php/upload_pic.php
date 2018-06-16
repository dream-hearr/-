<?php
session_start();
include "../php/conn.php";

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

    if (file_exists("../upload_pic/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../upload_pic/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "../upload_pic/" . $_FILES["file"]["name"]."<br />";
      $url="../upload_pic/" . $_FILES["file"]["name"];
      //echo $url;
      
      $name=$_FILES["file"]["name"];
      $type=$_FILES["file"]["type"];
      $author=$_SESSION['username'];
      $date=date("Y.m.d");
      $sql="insert into tb_pic(name,url,type,author,date) values ('$name','$url','$type','$author','$date')";
      if (mysql_query($sql)){
      	echo "上传成功";
      }
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>