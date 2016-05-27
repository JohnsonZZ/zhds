<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>概况-百事得物流公司</title>
<link rel="stylesheet" href="/zhds/Public/css/base.css" />
<link rel="stylesheet" href="/zhds/Public/css/style.css" />
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Abcty2d6CGtscG1TZK3K32ZFIR5bMURZ"></script>
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
	<div class="blankarea1"></div>
		<div class="main bc"> 
			<div class="blankarea4"></div>
			<div class="main-list fl">
				<div class="main-menu">
					<h3>关于我们</h3>
					<ul class="main-ul">
						<li id="intro">公司介绍</li>
						<li id="system"></li>
					</ul>
					<h3>联系我们</h3>
					<ul class="contact-ul">
						<li>官网：zhds.cxg-e.com</li>
						<li>邮编：516000</li>
						<li>热线：0758-6622298 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0758-6622299</li>
						<li>传真：0758-2759928</li>  
						<li>地址：广东省肇庆市端州区肇庆大道125区中航鼎盛综合大楼</li>
					</ul>
				</div>
				
			</div>
			<div class="main-content fl">
				<div class="main-name">
					<span>公司介绍</span>
					<div class="main-back fr">
						<a href="<?php echo U('Index/index');?>">首页</a>>公司概况
					</div>
				</div>
				<div id="intro-list" class="introduce">
					<h1>中航鼎盛首饰技术开发有限公司</h1>
					<p class="pt20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;广东中航鼎盛首饰技术开发有限公司（简称中航鼎盛）是一家专业设计、生产、销售黄金饰品、白银饰品、珠宝首饰、硬金、万足金（精品）、银成品材料（首饰用）、K金工艺品；珠宝首饰新技术开发；从事首饰加工技术进出口业务。</p>
					<p class="pt10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中航鼎盛是中航国际语香港东方珠宝集团有限公司共同创建的中外合资公司，实力雄厚，信誉可靠。</p>
					<p class="pt10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中航鼎盛将依靠两家股东公司的雄厚实力深耕细作、精益求精地设计与生产精品首饰，使其工艺在常规黄金首饰、3D硬金首饰和其他首饰设计与加工领域处于领先地位；同时我们也将继续秉承专业的精神，不断完善管理体系，一热诚的态度，为客户服务实现双赢，与客户共同成就辉煌事业！</p>
					<div style="width:648px;height:300px;font-size:12px" id="map"></div>
				</div>
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
	<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(112.521694,23.12098),16);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
      var markers = [
        {content:"官网：zhds.cxg-e.com<br />热线：0758-6622298 6622299 <br />传真：0758-2759928",title:"中航鼎盛首饰技术开发有限公司",imageOffset: {width:-46,height:-21},position:{lat:23.120481,lng:112.520652}}
      ];
      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:false});
      map.addControl(overviewControl);
    }
    var map;
      initMap();
  </script>
</body>
</html>