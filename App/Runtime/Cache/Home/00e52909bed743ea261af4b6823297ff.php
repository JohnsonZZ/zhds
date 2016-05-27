<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页-百事得物流公司</title>
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

		<div class="homepage bc">        

			<div class="blankarea2"></div>
			<div class="suit fl">
            	<div class="suit-area">
                	<h3 class="fl">精美作品</h3>
            	</div>
                <div class="suit-image">
					<div id="film">
						<ul id="uFilm" class="uFilm">
							<?php if(is_array($goods)): foreach($goods as $key=>$val): ?><li><img src="/zhds/Public/upload/image/<?php echo ($val['href']); ?>" alt="<?php echo ($val['brief']); ?>"  width="200" height="150"/></li><?php endforeach; endif; ?>
						</ul>
					</div>
                </div>
            </div>
			<div class="news fl">
				<div class="news-images fl">
					<div id="slide">
						<a id="btnLeft" href="javascript:;"></a>
						<a id="btnRight" href="javascript:;"></a>
						<ul id="uSlide" class="uSlide">
							<li><img src="/zhds/Public/images/wuliu.png" alt="新闻图片" height="300px" width="450px"/></li>
							<li><img src="/zhds/Public/images/example3.jpg" alt="新闻图片" height="300px" width="450px"/></li>
							<li><img src="/zhds/Public/images/example1.jpg" alt="新闻图片" height="300px" width="450px"/></li>
							<li><img src="/zhds/Public/images/RFID.png" alt="新闻图片" height="300px" width="450px"/></li>
							<li><img src="/zhds/Public/images/example2.jpg" alt="新闻图片" height="300px" width="450px"/></li>
						</ul>
						<div id="ico" class="ico">
								<a class="active" href="javascript:;"></a>
								<a href="javascript:;"></a>
								<a href="javascript:;"></a>
								<a href="javascript:;"></a>
								<a href="javascript:;"></a>
						</div>
					</div>
				</div>
				<div class="news-list fr">
					<h3 class="fl">公司新闻</h3>
					<div class="news-more fr">
						<a class="fr" href="<?php echo U('News/index');?>">+More</a>
					</div>
					<ul class="news-ul fl">
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Home/News/article/theme/'.$val[id]);?>"><?php echo ($val['title']); ?></a><span><?php echo ($val['time']); ?></span></li><hr /><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>            
			</div>
			<div class="blankarea2 fl"></div>
			
			<div class="company fl">
				<h3 class="fl">公司简介</h3>
				<div class="company-more fr">
					<a class="fr" href="<?php echo U('Comp/index');?>">+More</a>
				</div>
				<div class="company-content fl">
					<div class="company-image">
						<img src="/zhds/Public/images/ds.jpg" alt="公司图片" width="220px"/>
					</div>
					<p class="company-list fr">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;广东中航鼎盛首饰技术开发有限公司（简称中航鼎盛）是一家专业设计、生产、销售黄金饰品、白银饰品、珠宝首饰、硬金、万足金（精品）、银成品材料（首饰用）、K金工艺品；珠宝首饰新技术开发；从事首饰加工技术进出口业务。<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中航鼎盛是中航国际语香港东方珠宝集团有限公司共同创建的中外合资公司，实力雄厚，信誉可靠。
					</p>
				</div>
            </div> 			
			<div class="contact fr">
				<h3>联系我们</h3>
				<ul>
					<li>官网：zhds.cxg-e.com</li>
					<li>邮编：516000</li>
					<li>热线：0758-6622298  6622299</li>
					<li>传真：0758-2759928</li>  
					<li>地址：广东省肇庆市端州区肇庆大道125区中航鼎盛综合大楼</li>
				</ul>
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
		<script>
			//start slide 
			var aIco = $('#ico').children();
			var index = 0;
			var baseWidth = parseInt($('#slide').css('width'));
			var iNow = 0;
			$.each(aIco,function(){
				$(this).attr('index',index);
				$(this).click(function(){
					$(this).addClass('active').siblings().removeClass('active');
					var offsetWidth = $(this).attr('index') * -baseWidth + 'px';
					move(offsetWidth);

				});
				index++;
			})
			$('#btnRight').click(function(){
				var ativeIco = $('#ico').children(".active").attr('index');
				iNow = ++ativeIco;
				if(iNow > index-1){
					iNow = 0;
				}
				aIco.eq(iNow).addClass('active').siblings().removeClass('active');
				var offsetWidth = iNow * -baseWidth + 'px';
				move(offsetWidth);
			})
			$('#btnLeft').click(function(){
				var ativeIco = $('#ico').children(".active").attr('index');
				iNow = --ativeIco;
				if(iNow <0){
					iNow = 4;
				}
				aIco.eq(iNow).addClass('active').siblings().removeClass('active');
				var offsetWidth = iNow * -baseWidth + 'px';
				move(offsetWidth);
			})
			function move(offsetWidth){
				$('#uSlide').stop(true,true).animate({left: offsetWidth}, { duration: 1000 });
			}
			function autoMove(){
				var ativeIco = $('#ico').children(".active").attr('index');
				iNow = ++ativeIco;
				if(iNow > index-1){
					iNow = 0;
				}
				aIco.eq(iNow).addClass('active').siblings().removeClass('active');
				var offsetWidth = iNow * -baseWidth + 'px';
				move(offsetWidth);
			}
			setInterval("autoMove()",5000);
			//end slide
			//start film
			var fNow = 0;
			var aNow = 0;
			var lFilm = $('#uFilm').children();
			var lLen = lFilm.length;
			function autoFilm(){
			if(fNow === 0){
					aNow++;
					var offsetWidth = aNow * -240 + 'px';
					$('#uFilm').stop(true,true).animate({left: offsetWidth}, { duration: 1000 });
					if(aNow > lLen-5){
						fNow = 1;
					}
				}else{
					aNow --;
					var offsetWidth = parseInt($('#uFilm').css('left')) + 240 + 'px';
					$('#uFilm').stop(true,true).animate({left: offsetWidth}, { duration: 1000 });
					if(aNow == 0){
						fNow = 0;
					}
				}
			}
			setInterval("autoFilm()",2000);
		</script>
    </body>
</html>