<?php
session_start();
$username=$_SESSION['username'];

if (isset($_GET['mark'])){
$_SESSION['mark']=$_GET['mark'];
}
else{
	$_SESSION['mark']=0;
}

//这里有个bug 
if (isset($_SESSION['begin'])){
	$begin=$_SESSION['begin'];
	if (($_GET['mark']==0)&&(isset($_SESSION['begin']))){  //BUG
		$_SESSION['begin']=0;
	}
	else{
	$_SESSION['begin']=$begin+$_SESSION['mark'];
	}
}
else {
	$_SESSION['begin']=0;
}

include "php/deal_article.php";
?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>文章 - 博客后台管理系统</title>
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
      <form action="/Article/checkAll" method="post" >
        <h1 class="page-header">文章操作</h1>
        <ol class="breadcrumb">
          <li><a href="add-article.php">增加文章</a></li>
        </ol>
        <h1 class="page-header">文章管理</h1>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">标题</span></th>

 
                <th class="hidden-sm"><span class="glyphicon glyphicon-comment"></span> <span class="visible-lg">评论</span></th>
                <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">日期</span></th>
                <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
              </tr>
            </thead>
            <tbody>
            	<?php 
            for ($i=0;$i<7;$i++){
            	if (isset($aid[$i])){
             echo "<tr>             	

                <td class='article-title'>$title[$i]</td>
                <td class='hidden-sm'>$comment_number[$i]</td>
                <td>$time[$i]</td>
                <td><a href='update-article.php?aid=$aid[$i]'>修改</a> <a href='php/delete_article.php?aid=$aid[$i]'>删除</a></td>
             </tr>";}}
             ?>
             
 
            </tbody>
          </table>
        </div>
        <footer class="message_footer">
          <nav>
            <ul class="pagination pagenav">
            	<li class=""><a href="../Admin/article.php?mark=0&begin=<?php echo $_SESSION['begin']?>">首页 </a> </li>
              <li class=""><a href="../Admin/article.php?mark=-7&begin=<?php echo $_SESSION['begin']?>">&laquo;</a> </li>
              <li><a href="../Admin/article.php?mark=7&begin=<?php echo $_SESSION['begin']?>">&raquo;</a> </li>
            </ul>
          </nav>
        </footer>
      </form>
    </div>
  </div>
</section>
<script src="js/bootstrap.min.js"></script> 
<script src="js/admin-scripts.js"></script> 

</body>
</html>
