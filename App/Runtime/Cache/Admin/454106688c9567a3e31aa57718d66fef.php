<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    
    <head>
        	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>修改图片 | 中航鼎盛控制台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/zhds/Bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/zhds/Plugins/fa/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/zhds/Public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/zhds/Public/css/skins.min.css">
		<link rel="stylesheet" href="/zhds/Bootstrap/css/fileinput.min.css">
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>T</b>YM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Tony</b>MB</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/zhds/Public/images/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo ($_SESSION['account']); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/zhds/Public/images/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      <?php echo ($_SESSION['account']); ?> - 超级管理员
                      <small>百事得物流有限公司</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="<?php echo U('Goods/index');?>">服务</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="<?php echo U('List/index');?>">案例</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="<?php echo U('News/index');?>">新闻</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo U('Home/Index/index');?>" class="btn btn-default btn-flat">前台</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo U('Login/quit');?>" class="btn btn-default btn-flat">退出</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
            <!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">主菜单</li>
            <li class="active treeview">
              <a href="<?php echo U('Index/index');?>">
                <i class="fa fa-dashboard"></i> <span>控制台</span>
              </a>
            </li>
            <li id="pGoods" class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>公司产品</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iGoods"><a href="<?php echo U('Goods/index');?>"><i class="fa fa-circle-o"></i> 产品列表</a></li>
                <li id="aGoods"><a href="<?php echo U('Goods/add');?>"><i class="fa fa-circle-o"></i> 添加产品</a></li>
              </ul>
            </li>
			<li id="pImg" class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>图片轮播</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iImg"><a href="<?php echo U('Img/index');?>"><i class="fa fa-circle-o"></i> 查看图片</a></li>
                <li id="aImg"><a href="<?php echo U('Img/add');?>"><i class="fa fa-circle-o"></i> 添加图片</a></li>
              </ul>
            </li>
			<li id="pNews" class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>新闻资讯</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iNews"><a href="<?php echo U('News/index');?>"><i class="fa fa-circle-o"></i> 查看新闻</a></li>
                <li id="aNews"><a href="<?php echo U('News/add');?>"><i class="fa fa-circle-o"></i> 添加新闻</a></li>
              </ul>
            </li>
			<li id="pAdmin" class="treeview">
              <a href="#">
                <i class="fa fa-key"></i>
                <span>管理员组</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iAdmin"><a href="<?php echo U('Admin/index');?>"><i class="fa fa-circle-o"></i> 管理员列表</a></li>
                <li id="aAdmin"><a href="<?php echo U('Admin/add');?>"><i class="fa fa-circle-o"></i> 添加管理员</a></li>
              </ul>
            </li>
            <li id="important"><a href="#"><i class="fa fa-circle-o text-red"></i> <span>重要信息</span></a></li>
            <li id="warning"><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>警告信息</span></a></li>
            <li id="info"><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>一般信息</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        修改图片
                        <small>
                            排序越低越靠前，图尽量小一点。
                        </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo U('Index/index');?>">
                                <i class="fa fa-dashboard">
                                </i>
                                控制台
                            </a>
                        </li>
                        <li class="active">
                            修改图片
                        </li>
                    </ol>
                </section>
                <section class="content">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                修改图片
                            </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo U('update');?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo ($img[id]); ?>" />
                            <div class="box-body">
								<div class="form-group">
									 <label for="img" class="form-group-img">
									 原图片<br /><img src="/zhds/Public/upload/image/<?php echo ($img['img']); ?>"   id="oldImg"  width="60px" height="60px"><br /> 
									 新图片(不设置或者设置错误都将使用原来图片)<br />
                                        图片（不能大于2MB）
                                    </label>
									<input type="file" name="img" id="img" />
								</div>
								<div class="form-group">
                                    <label for="ol">
                                        排序
                                    </label>
                                    <input type="text" class="form-control" name="ol" id="ol" placeholder="序号越低越靠前" value="<?php echo ($img[ol]); ?>" />
                                </div>
								
							</div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">
                                    提交
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                    <section>
            </div>
            <!-- /.content-wrapper -->
            	<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="http://almsaeedstudio.com">ZZ Studio</a>.</strong> All rights reserved.
      </footer>
        </div>
        <!-- ./wrapper -->
        	<!-- jQuery 1.1.12 -->
    <script src="/zhds/Public/js/jquery.js"></script>
	<!-- layer 2.2 -->
	<script src="/zhds/Plugins/layer/layer.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/zhds/Bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/zhds/Public/js/app.min.js"></script>
		<script src="/zhds/Bootstrap/js/fileinput.min.js"></script>
		<script src="/zhds/Bootstrap/js/fileinput_locale_zh.js"></script>
        <script>
            $('#pImg').addClass("active").siblings().removeClass("active");
            $('#aImg').addClass("active");
			$('#img').fileinput({
                language: 'zh', //设置语言
                allowedFileExtensions : ['jpg', 'png','gif'],//接收的文件后缀,
                showUpload: false, //是否显示上传按钮
                showCaption: false,//是否显示标题
                browseClass: "btn btn-primary", //按钮样式 
				maxFileSize: 1024,
            });
			
		</script>
    </body>

</html>