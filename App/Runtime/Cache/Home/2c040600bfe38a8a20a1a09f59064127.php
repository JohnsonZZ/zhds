<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>产品-广东中航鼎盛首饰技术开发有限公司</title>
<link rel="stylesheet" href="/zhds/Public/css/base.css" />
<link rel="stylesheet" href="/zhds/Public/css/style.css" />
</head>

<body>
	<script src="/zhds/Public/js/jquery.js"></script>
	<!-- layer 2.2 -->
	<script src="/zhds/Plugins/layer/layer.js"></script>
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
                <li class="inline"><a href="javascript:void(0);">产品介绍</a></li>
                <li class="inline"><a href="<?php echo U('News/index');?>">新闻资讯</a></li>
                <li class="inline"><a href="<?php echo U('Comp/index');?>">关于我们</a></li>
            </ul>
        </div>
    </div>
    </div>
    
</div>
    <div class="blankarea1"></div>
					<img src="/zhds/Public/images/zhong3.jpg" alt="百事得宣传"  />
	<div class="blankarea1"></div>
    <div class="main bc"> 
        <div class="blankarea4"></div>
    	<div class="main-list fl">
        	<div class="main-menu">
				<h3>产品分类</h3>
				<ul class="main-ul">
					<li id="company-news">><a href="<?php echo U('index');?>">所有产品</a></li>
					<li id="company-news">><a href="<?php echo U('index');?>?sort=1">手镯</a></li>
					<li id="company-news">><a href="<?php echo U('index');?>?sort=2">戒指</a></li>
					<li id="company-news">><a href="<?php echo U('index');?>?sort=3">套链</a></li>
				</ul>
				<h3>联系我们</h3>
				<ul class="contact-ul">
					<li>官网：zhds.cxg-e.com</li>
					<li>邮编：516000</li>
					<li>热线：0758-6622298 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0758-6622299</li>
					<li>联系邮箱: baishidewuliu@163.com</li>  
				</ul>
        	</div>
        </div>
        <div class="main-content fl">
        	<div class="main-name">
            	<span><?php echo ($sort1); ?></span>
                <div class="main-back fr">
                	<a href="<?php echo U('Index/index');?>">首页</a>><?php echo ($sort1); ?>
                </div>
            </div>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="goods">
				<a class="image<?php echo ($val['id']); ?>" href="javascript:;">
					<div class="image">
						<img src="/zhds/Public/upload/image/<?php echo ($val[href]); ?>" alt="<?php echo ($val['brief']); ?>"  height="150" width="140"/>
					</div>
					<div class="image-bottom f14">
						<?php echo ($val['brief']); ?>
					</div>
				</a>
			</div>
			<script>   <!--选择不一样的id值-->
						$(".image" + <?php echo ($val['id']); ?>).click(function(){
							layer.open({
							  type: 1,
							  title: false,
							  closeBtn: 0,
							  skin: 'layui-layer-nobg', //没有背景色
							  shadeClose: true,
							  content: $("#tong" +<?php echo ($val['id']); ?>)
							});
						})
			</script>
			<div id="tong<?php echo ($val['id']); ?>" class="hide layui-layer-wrap" style="display: none;"><img src="/zhds/Public/upload/image/<?php echo ($val[href]); ?>" width="100%" /></div><?php endforeach; endif; else: echo "" ;endif; ?>
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

		
    </body>
</html>