<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻-百事得物流公司</title>
<link rel="stylesheet" href="/zhds/Public/css/base.css" />
<link rel="stylesheet" href="/zhds/Public/css/style.css" />
</head>

<body>
    <div class="nav">
    <div class="nav-top">
        <div class="nav-header bc">
			<img src="/zhds/Public/images/logo.jpg" alt="百事得" />
        </div>	
		<div class="nav-bottom">
		<div class="nav-list bc">
            <ul class="nav-ui">
                <li class="inline"><a href="<?php echo U('Index/index');?>">公司首页</a></li>
                <li class="inline"><a href="<?php echo U('Service/index');?>">黄金首饰</a></li>
                <li class="inline"><a href="javascript:void(0);">所有产品</a></li>
                <li class="inline"><a href="<?php echo U('News/index');?>">新闻资讯</a></li>
                <li class="inline"><a href="<?php echo U('Comp/index');?>">关于我们</a></li>
            </ul>
        </div>
    </div>
    </div>
    
</div>
	<div class="blankarea1"></div>
    <div class="main bc"> 
		<img src="/zhds/Public/images/case-top.jpg" alt="百事得宣传"  />
        <div class="blankarea4"></div>
    	<div class="main-list fl">
        	<div class="main-menu">
				<h3>案例展示</h3>
				<ul class="main-ul">
					<li id="company-news"><a href="<?php echo U('Case/index');?>">成功案例</a></li>
					<li id="industry-news"></li>
				</ul>
				<h3>联系我们</h3>
				<ul class="contact-ul">
					<li>公司名称：<br />百事得物流有限公司</li>
					<li>官网：www.zqbestlog.com</li>
					<li>邮编：516000</li>
					<li>合作热线：<br />0758-2107833</li>
					<li>联系邮箱: baishidewuliu@163.com</li>  
				</ul>
        	</div>
        </div>
        <div class="main-content fl">
        	<div class="main-name">
            	<span>案例展示</span>
                <div class="main-back fr">
                	<a href="<?php echo U('Index/index');?>">首页</a>>案例展示
                </div>
            </div>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="case">
				<a href="<?php echo U('Home/Case/article/theme/'.$val[id]);?>"><img src="/zhds/Public/upload/image/<?php echo ($val[href]); ?>" width="180px" height="130px"/></a>
				<div class="content">
					<a href="<?php echo U('Home/Case/article/theme/'.$val[id]);?>"><h2><?php echo ($val['title']); ?></h2></a>
					<p><?php echo ($val['brief']); ?></p>
				</div>
				<a class="detail" href="<?php echo U('Home/Case/article/theme/'.$val[id]);?>">查看详情>></a>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
	
	<div class="footer">
     <div class="footer-content bc">
		<hr />
        <div class="footer-line fl">
        	<ul>
                <li class="inline"><a href="<?php echo U('Comp/index');?>">关于我们 | </a></li>
                <li class="inline"><a href="">联系我们 | </a></li>
                <li class="inline"><a href="">信息反馈 | </a></li>
                <li class="inline"><a href="">人才招聘 | </a></li>
                <li class="inline"><a href="">友情链接</a></li>
           	</ul>
        </div>
        <div class="copyright fr">
           	<p>版权所有  @广东中航鼎盛首饰技术开发有限公司</p>
        </div>
    </div>
</div>
		<script src="/zhds/Public/js/jquery.js"></script>
    </body>
</html>