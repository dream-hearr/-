<?php
session_start();
$username=$_SESSION['username'];
if (isset($_SESSION['begin'])){
	unset($_SESSION['begin']);
}

include "php/check_contact.php";
?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>留言 - 博客后台管理系统</title>
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
        <li><a href="contact.php" data-toggle="tooltip" data-placement="bottom" title="网站暂无留言功能">留言</a></li>
        <li><a href="manage-user.php">用户</a></li>
      </ul>
    </aside>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
      <form action="/Comment/checkAll" method="post">
        <h1 class="page-header">留言管理</h1>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">内容</span></th>
                <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">日期</span></th>
                <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
              </tr>
            </thead>
            <tbody>
        	<?php 
              $n=$sum['sum_contact'];
            for ($i=0;$i<$n;$i++){
            	if (isset($cid[$i])){
            		$id=$cid[$i];
             echo "<tr>             	

                <td class='article-title'>$relname[$i]:";
                	content($id);echo "</td>
                <td>$date[$i]</td>
                <td><a href='php/delete_contact.php?cid=$cid[$i]'>&nbsp;&nbsp;&nbsp;&nbsp;删除</a></td>
             </tr>";}}
             ?>
            </tbody>
          </table>
        </div>

      </form>
    </div>
  </div>
</section>
<script src="js/bootstrap.min.js"></script> 
<script src="js/admin-scripts.js"></script> 
</body>
</html>
