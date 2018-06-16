<?php
session_start();
$username=$_SESSION['username'];
include "../php/conn.php";

//统计文章总数
$sql="select count(aid) as sum_a from tb_article";
$res=mysql_query($sql);
if ($res){
$rows=mysql_fetch_array($res);
$sum_a=$rows['sum_a'];
}

//统计留言总数
$sql2="select count(cid) as sum_c from tb_contact";
$res2=mysql_query($sql2);
if ($res2){
$rows2=mysql_fetch_array($res2);
$sum_c=$rows2['sum_c'];
}

//统计文章总点击量
$sql3="select sum(click_amount) as click_amount from tb_article";
$res3=mysql_query($sql3);
if ($res3){
$rows3=mysql_fetch_array($res3);
$click_amount=$rows3['click_amount'];
}

//统计评论总数
$sql4="select count(id) as comment from tb_comment";
$res4=mysql_query($sql4);
if ($res4){
$rows4=mysql_fetch_array($res4);
$comment=$rows4['comment'];
}

?>
<!doctype html>
<html lang="zh-CN">
<head>

<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>博客后台管理系统</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="images/icon/icon.png">
<link rel="shortcut icon" href="images/icon/favicon.ico">
<script src="js/jquery-2.1.4.min.js"></script>
<!--[if gte IE 9]>
  <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="js/html5shiv.min.js" type="text/javascript"></script>
  <script src="js/respond.min.js" type="text/javascript"></script>
  <script src="js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>

<body class="user-select">
<section class="container-fluid">
  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="/">回到博客主页</a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $username;?></a>
            </li>
            <li><a href="../php/clear_session.php" >退出登录</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="row">
    <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
      <ul class="nav nav-sidebar">
        <li class="active"><a href="main.php">报告</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a href="article.php">文章</a></li>
        <li><a href="notice.php">公告</a></li>
        <li><a href="comment.php">评论</a></li>
        <li><a data-toggle="tooltip" data-placement="bottom" title="网站暂无留言功能">留言</a></li>
        <li><a href="manage-user.php">用户</a></li>
      </ul>
    </aside>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
      <h1 class="page-header">信息总览</h1>
      <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
          <h4>文章</h4>
          <span class="text-muted"><?php echo $sum_a;?> 条</span> </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <h4>评论</h4>
          <span class="text-muted"><?php echo $comment;?> 条</span> </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <h4>留言</h4>
          <span class="text-muted"><?php echo $sum_c;?> 条</span> </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <h4>文章点击量</h4>
          <span class="text-muted"><?php echo $click_amount;?></span> </div>
      </div>
      <h1 class="page-header">状态</h1>
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tbody>
            <tr>
              <td>登录者: <span><?php echo $_SESSION['username'];?></span>，欢迎您的到来</td>
            </tr>
            <tr>
              <td>你的每一步，都关系到整个博客系统的生死存亡>_<</td>
            </tr>
          </tbody>
        </table>
      </div>
     
      <footer>
        <h1 class="page-header">程序信息</h1>
        <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tbody>
            <tr>
              <td><span style="display:inline-block; width:8em">版权所有</span>Design by dream-heart</td>
            </tr>
            <tr>
              <td><span style="display:inline-block;width:8em">当前日期</span><?php echo date("Y-m-d");?></td>
            </tr>
          </tbody>
        </table>
        </div>
      </footer>
    </div>
  </div>
</section>
<script src="js/bootstrap.min.js"></script> 
<script src="js/admin-scripts.js"></script>
</body>
</html>
