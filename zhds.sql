-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 05 月 30 日 16:35
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `zhds`
--

-- --------------------------------------------------------

--
-- 表的结构 `zz_admin`
--

CREATE TABLE IF NOT EXISTS `zz_admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `account` varchar(10) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zz_admin`
--

INSERT INTO `zz_admin` (`id`, `account`, `pwd`, `salt`) VALUES
(1, 'admin', 'ba475fcdbd68bc796c44fff8078896f2d74142e1', 'VMPDDVRqsrOaEyfPB7Hhop/i09Oe9B+/t4xN+0ISlIE='),
(2, 'zz', '2c42928bc15d39e045310d5d4ca1e7f5ae5ea622', 'taVjwrkxEZB+U+hHTpn5yQPbA+q+ECg9f7x02zpldgE=');

-- --------------------------------------------------------

--
-- 表的结构 `zz_goods`
--

CREATE TABLE IF NOT EXISTS `zz_goods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `href` varchar(50) NOT NULL,
  `sort` set('1','2','3') NOT NULL,
  `brief` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `ol` int(10) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `zz_goods`
--

INSERT INTO `zz_goods` (`id`, `href`, `sort`, `brief`, `content`, `ol`, `time`) VALUES
(3, '20160527/5747ea2375006.jpg', '2', '甜美活口足金女戒', '', 1, '2016-05-27 06:33:08'),
(4, '20160527/5747ea3602ba9.jpg', '2', '求婚幸福花戒子', '', 2, '2016-05-27 06:33:27'),
(5, '20160527/5747ea58e197e.jpg', '1', '经典女式首饰金镯', '', 3, '2016-05-27 06:34:01'),
(6, '20160527/5747ea6d501d0.jpg', '1', '一对足金镯子正品', '', 4, '2016-05-27 06:34:22'),
(7, '20160527/5747eaa03458c.jpg', '3', '黄金项链女款', '', 5, '2016-05-27 06:35:13'),
(8, '20160527/5747eab67a318.jpg', '1', '简约主义时尚个性车花女式手镯', '', 6, '2016-05-27 06:35:35'),
(9, '20160527/5747ead6c6add.jpg', '2', '时尚镂空蝴蝶活口足金戒子首饰送女友礼物', '', 7, '2016-05-27 06:36:07');

-- --------------------------------------------------------

--
-- 表的结构 `zz_img`
--

CREATE TABLE IF NOT EXISTS `zz_img` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '地址',
  `ol` int(10) NOT NULL COMMENT '排序',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `zz_img`
--

INSERT INTO `zz_img` (`id`, `img`, `ol`, `time`) VALUES
(8, '20160530/574bb04be1c73.jpg', 1, '2016-05-30 03:15:23'),
(9, '20160530/574bb051660b7.jpg', 2, '2016-05-30 03:15:29'),
(10, '20160530/574bb533042c4.jpg', 3, '2016-05-30 03:36:19'),
(11, '20160530/574bb5388ac64.jpg', 4, '2016-05-30 03:36:24'),
(12, '20160530/574bb53de38f8.jpg', 5, '2016-05-30 03:36:29');

-- --------------------------------------------------------

--
-- 表的结构 `zz_log`
--

CREATE TABLE IF NOT EXISTS `zz_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `log` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `zz_log`
--

INSERT INTO `zz_log` (`id`, `user`, `ip`, `log`, `time`) VALUES
(1, 'admin', '127.0.0.1', '登陆成功', '2016-05-01 06:25:34'),
(2, 'admin', '127.0.0.1', '登陆成功', '2016-05-02 01:41:21'),
(3, 'admin', '127.0.0.1', '登陆成功', '2016-05-03 12:35:43'),
(4, 'admin', '::1', '登陆成功', '2016-05-29 04:56:37'),
(5, 'admin', '::1', '登陆成功', '2016-05-29 12:57:09'),
(6, 'admin', '::1', '登陆成功', '2016-05-30 03:36:03');

-- --------------------------------------------------------

--
-- 表的结构 `zz_news`
--

CREATE TABLE IF NOT EXISTS `zz_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `zz_news`
--

INSERT INTO `zz_news` (`id`, `title`, `content`, `time`) VALUES
(18, '梦金园—吉尼斯世界记录称号“最大的金戒指”全球巡展', '<p>&nbsp;5月29日，作为全球巡展的第一站，梦金园—吉尼斯世界记录®称号“最大的金戒指”全球巡展暨<strong style="margin: 0px; padding: 0px;"><a href="http://www.wto168.net/mg-mjyzbss/" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(43, 36, 26);">梦金园</a></strong>山东青岛崂百专卖店开业盛典在青岛隆重启幕，活动吸引了数十家媒体的关注和报道。</p><p>&nbsp;</p><p><img src="http://news.wto168.net/newWeb/uploads/allimg/160530/15393_160530100836_1.png" width="574" border="0" height="599" alt="梦金园—吉尼斯世界记录®称号“最大的金戒指”全球巡展，首站亮相青岛" data-bd-imgshare-binded="1" style="margin: 0px; padding: 0px; border: none; cursor: pointer;"/></p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; 在梦金园—吉尼斯世界记录®称号“最大的金戒指”全球巡展青岛站活动现场，这枚由梦金园39位工匠历经99天锤炼而成的世界“最大的金戒指”惊艳了到场所有人的目光。戒指重量为82.20千克，黄金纯度达到999.9‰，戒指设计蕴含着浓浓的中国古典文化内涵，梦金园珠宝大师独具匠心，将中国结、大红灯笼、回形纹等中国传统文化符号完美沁入戒指设计当中，使戒指呈现出深厚的中华文化底蕴。在高纯度黄金材质的映衬下，“中国风”设计熠熠生辉。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; 同场还举行了吉尼斯同款戒指的慈善拍卖会，共筹得善款6万余元，所筹善款将全部捐献给当地慈善机构，用于社会爱心捐助活动。梦金园集团始终秉承“追求卓越，奉献社会”的企业精神，长期致力于捐资助学、扶贫济困、爱心捐助等慈善公益活动，以实际行动履行着企业的社会责任，企业先后被授予“最具爱心慈善企业”等百余项荣誉。</p><p>&nbsp;</p><p><img src="http://news.wto168.net/newWeb/uploads/allimg/160530/15393_160530100853_1.png" width="578" border="0" height="429" alt="梦金园—吉尼斯世界记录®称号“最大的金戒指”全球巡展，首站亮相青岛" data-bd-imgshare-binded="1" style="margin: 0px; padding: 0px; border: none; cursor: pointer;"/></p><p><br/></p>', '2016-05-30 07:47:02'),
(19, '中国首个VR珠宝体验店入驻深圳 不用进店就可试戴', '<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Arial, &#39;Microsoft YaHei&#39;, 微软雅黑, yahei, &#39;Microsoft JhengHei&#39;, simsun, 华文细黑, STHeiti, MingLiu; font-size: 14px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);">国际<a href="http://www.wto168.net/" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(43, 36, 26);"><strong style="margin: 0px; padding: 0px;">珠宝</strong></a>网5月28日讯（记者 刘虹伶） 不用进店就能试戴<a href="http://www.wto168.net/" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(43, 36, 26);"><strong style="margin: 0px; padding: 0px;">珠宝</strong></a>？在店门口就可以买到心仪的珠宝？曾经我们在动漫上才能看到的场景，如今已经成为了现实。5月28日，中国首个VR珠宝体验店——TOMEI入驻深圳KK ONE，消费者不用佩戴智能设备即可试戴珠宝，不用进店就能完成购买。</p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Arial, &#39;Microsoft YaHei&#39;, 微软雅黑, yahei, &#39;Microsoft JhengHei&#39;, simsun, 华文细黑, STHeiti, MingLiu; font-size: 14px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;</p><p><img src="http://news.wto168.net/newWeb/uploads/allimg/160528/15393_160528160843_1.png" width="420" border="0" height="280" alt="中国首个VR珠宝体验店入驻深圳 不用进店就可试戴及购买" data-bd-imgshare-binded="1" style="margin: 0px; padding: 0px; border: none; cursor: pointer;"/></p><p><strong style="margin: 0px; padding: 0px;">TOMEI深圳KK ONE店。</strong></p><p><strong style="margin: 0px; padding: 0px;">&nbsp;</strong></p><p><strong style="margin: 0px; padding: 0px;"><img src="http://news.wto168.net/newWeb/uploads/allimg/160528/15393_160528160855_1.png" width="420" border="0" height="280" alt="中国首个VR珠宝体验店入驻深圳 不用进店就可试戴及购买" data-bd-imgshare-binded="1" style="margin: 0px; padding: 0px; border: none; cursor: pointer;"/></strong></p><p><strong style="margin: 0px; padding: 0px;">模特展示。</strong></p><p><strong style="margin: 0px; padding: 0px;">&nbsp;</strong></p><p><strong style="margin: 0px; padding: 0px;"><img src="http://news.wto168.net/newWeb/uploads/allimg/160528/15393_160528160911_1.png" width="420" border="0" height="280" alt="中国首个VR珠宝体验店入驻深圳 不用进店就可试戴及购买" data-bd-imgshare-binded="1" style="margin: 0px; padding: 0px; border: none; cursor: pointer;"/></strong></p><p><strong style="margin: 0px; padding: 0px;">开业现场。</strong></p><p><br/></p>', '2016-05-30 07:56:31'),
(20, 'De Beers英女王登基钻禧之年倾情献礼', '<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Arial, &#39;Microsoft YaHei&#39;, 微软雅黑, yahei, &#39;Microsoft JhengHei&#39;, simsun, 华文细黑, STHeiti, MingLiu; font-size: 14px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);">为庆祝英国女皇伊丽莎白二世登基六十周年的钻禧之年，<a href="http://purchase.wto168.net/search.html?type=1" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(43, 36, 26);"><strong style="margin: 0px; padding: 0px;">钻石</strong></a><a href="http://www.wto168.net/" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(43, 36, 26);"><strong style="margin: 0px; padding: 0px;">珠宝</strong></a>中的“光影大师”(Jeweller of Light)戴比尔斯<a href="http://purchase.wto168.net/search.html?type=1" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(43, 36, 26);"><strong style="margin: 0px; padding: 0px;">钻石</strong></a><a href="http://www.wto168.net/" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(43, 36, 26);"><strong style="margin: 0px; padding: 0px;">珠宝</strong></a>(De Beers Diamond Jewellers)从戴比尔斯的现代宝藏具有神秘魅力的Talisman Wonder中汲取创作灵感，再一次将最罕见的天然钻石原石和最出色的车工钻石完美结合，创造出了这一代表崇高皇权与钻禧荣耀的皇冠，传承了戴比尔斯在钻石领域超越百年的卓越工艺和专业知识。</p><p>&nbsp;</p><p style="text-align: center;"><img src="/zhds/Public/upload/image/ueditor/20160530/1464595276853277.png" width="371" border="0" height="473" alt="戴比尔斯钻石珠宝Talisman皇冠 英女王登基钻禧之年倾情献礼" data-bd-imgshare-binded="1" style="margin: 0px; padding: 0px; border: none; cursor: pointer;"/></p><p>&nbsp;</p><p>&nbsp;<strong style="margin: 0px; padding: 0px;">&nbsp;&nbsp; &nbsp; &nbsp;制作工艺之美</strong></p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;戴比尔斯钻石珠宝(De Beers Diamond Jewellers)巧夺天工的精湛工艺，将钻石天然的华丽美态与钻石原石自然散发的摄人魅力完美结合，幻化成永恒高贵的典雅风尚。皇冠奢华夺目的设计结构与钻石完美融为一体，独具匠心的突出式镶嵌工艺令光线穿透每一颗至臻美钻，闪耀着无以伦比的璀璨光芒。&nbsp;</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;De Beers Talisman皇冠共镶嵌了974颗钻石，其中包括797颗车工钻石和177颗钻石原石。皇冠顶部所镶嵌的主钻是重达73克拉的钻石原石，体现了皇权的至高无尚。底部所镶嵌的两颗28克拉及26克拉的钻石原石，与主钻相得益彰，交相辉映，尽显皇权的矜贵。</p><p>&nbsp;</p><p>&nbsp;<strong style="margin: 0px; padding: 0px;">&nbsp;&nbsp; &nbsp; &nbsp;超凡设计</strong></p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;在此，戴比尔斯钻石珠宝(De Beers Diamond Jewellers)荣幸地为您揭开这一珠宝大师级的超凡设计。Talisman皇冠完美地融合了钻石精湛的制作工艺与极致的艺术表现,为庆祝英女皇钻禧之年谱写了又一首传世颂歌。从古埃及、中古至20世纪，天然原钻一直为国王与皇后们所专享，据说天然原钻能善佑主、生吉祥、滋富贵。在镶嵌到珠宝中之前，原始形态的钻石为透明的八面体天然原钻，它那独特的角锥结构和神秘的意义备受珍视，因此常作为珍贵的神符，代表着力量与胜利。在过去的120多年中，戴比尔斯的钻石专家们有幸亲睹来自世界各地的天然原钻并将其中最具有天然亮光和天生美质的珍贵收藏。只有在极其偶然的情况下才会发现一枚特质非凡的天然美钻，而戴比尔斯钻石珠宝(De Beers Diamond Jewellers)的独特地位让其能够不放过每一颗进入眼帘的美钻。仅有千分之一的天然原钻拥有戴比尔斯钻石珠宝(De Beers Diamond Jewellers)所需的特征、魅力和美感，而也只有这样的钻石才能入选Talisman皇冠。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;戴比尔斯选用这些由钻石大师精挑细选出的钻石原石以及车工钻石，独具匠心的设计创意，赋予这深邃华丽的皇冠以生命力，令其散发出永恒的慑人魅力。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;皇冠的制作过程结合了戴比尔斯钻石珠宝(De Beers DiamondJewellers)历来创作之旅中的灵感，巧妙地运用将钻石原石及车工钻石的天然魅力，完美绽放钻石的火光(Fire)、生命力(Life)与亮光(Brilliance)。璀璨动人的钻石代表着过往显赫的功绩，而皇冠上留白的空间则表达了对未来的希冀与展望。</p><p>&nbsp;</p><p>&nbsp; &nbsp;<strong style="margin: 0px; padding: 0px;">&nbsp;&nbsp; &nbsp;戴比尔斯钻石珠宝Talisman皇冠</strong></p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;独一无二的De Beers Talisman皇冠，彰显钻石卓尔不群的自然色泽，将属于同色调的褐色，琥珀色以及橙色优雅地结合，层层递进的渐变色彩完美地展现了钻石原石及车工钻石永恒优雅的高贵气质。</p><p><br/></p>', '2016-05-30 08:01:23'),
(21, '萧邦再度成戛纳国际电影节官方合作伙伴', '<p>1998年以来，萧邦（Chopard）的光彩一直与戛纳国际电影节携手前行。除了打造传奇的金棕榈奖座，并点饰电影宫前红毯阶梯上的熠熠星光，这家瑞士著名的钟表<a href="http://www.wto168.net/" style="margin: 0px; padding: 0px; color: rgb(43, 36, 26); text-decoration: none;"><strong style="margin: 0px; padding: 0px;">珠宝</strong></a>制造商每年还嘉奖电影界的青年才俊并举办难忘的年度盛宴。今年，萧邦高级<a href="http://www.wto168.net/" style="margin: 0px; padding: 0px; color: rgb(43, 36, 26); text-decoration: none;"><strong style="margin: 0px; padding: 0px;">珠宝</strong></a>所选用的主题是祖母绿，将为为期两周的戛纳国际电影节再度增添璀璨魅力。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;萧邦与戛纳的携手源于1997年，时任电影节主席的皮埃尔·维奥特(Pierre Viot)邀萧邦联合总裁兼艺术总监卡罗琳·舍费尔(Caroline Scheufele)重新设计金棕榈奖座。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; 次年，这家来自日内瓦的珠宝制造商正式成为戛纳电影节的官方合作伙伴，已然成为克鲁瓦塞特海滨大道上优雅和魅力的象征。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong style="margin: 0px; padding: 0px;">萧邦再度成戛纳国际电影节官方合作伙伴</strong></p><p>&nbsp;</p><p style="text-align: center;"><img src="/zhds/Public/upload/image/ueditor/20160530/1464595333677277.png" width="348" border="0" height="495" alt="萧邦再度成戛纳国际电影节官方合作伙伴" style="margin: 0px; padding: 0px; border: none; cursor: pointer;"/><strong style="margin: 0px; padding: 0px;"><br style="margin: 0px; padding: 0px;"/></strong></p><p><strong style="margin: 0px; padding: 0px;">2016 Red Carpet 系列</strong></p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;从2007年第60届电影节至今的每一年，卡罗琳舍费尔(Caroline Scheufele)以走上世界最知名红毯上的女演员为灵感，设计出一系列高级珠宝首饰。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;每年的Red Carpet都会推出一系列新款，因为萧邦为自己设定的挑战就是每年推出数量与电影节届数相同的专属珠宝系列。今年即将揭晓的69款新品，灵感仍然源自美丽性感的女明星们。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;这些稀世之宝全部在萧邦位于日内瓦的珠宝工作坊里被精雕细琢而成，凝聚了设计师、蜡镶铸造专家、宝石切割师以及宝石镶嵌师和抛光师的专业知识和天才技艺。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;其中就有有一条链镶有55颗梨形黄钻石项链，并交织镶嵌着梨形和明亮式切割钻石。</p><p>&nbsp;</p><p>&nbsp; &nbsp;&nbsp;<strong style="margin: 0px; padding: 0px;">&nbsp; &nbsp;&nbsp;萧邦最具潜质演员奖Trophée Chopard</strong></p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;2001年开始，萧邦为戛纳电影节新设立了“萧邦最具潜质演员奖” (Trophée Chopard)，以此奖励在电影界崭露头角的一位男演员和一位女演员，以鼓励青年才俊。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;借此，这家来自日内瓦的这家珠宝钟表商为戛纳电影节的艺术影响力贡献了力量，同时也加强了对电影制片事业的支持。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;历届获该殊荣的男女演员中，不少人都由此迎来了演绎生涯的辉煌时期，其中包括玛丽昂·歌迪亚(Marion Cotillard)，黛安·克鲁格(Diane.Kruger)以及近期获奖的阿黛尔·艾克萨勒霍布洛斯(Adèle Exarchopoulos)。与《Variety》 杂志合办的颁奖典礼将于5月12日周四举行，届时也将由一名巨星担任主持。(2013年由科林菲斯主持，2014年凯特布兰切特，2015为茱莉安·摩尔)</p><p>&nbsp;</p><p>&nbsp;<strong style="margin: 0px; padding: 0px;">&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;萧邦“一千零一夜”晚宴派对</strong></p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;萧邦每年举办的璀璨盛宴永远是电影节期间最大亮点之一。这家珠宝商每年都为其贵宾精心策划了精彩卓绝的晚宴。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;不论是2014年重建知名的“电影城”，还是2015年为浮华“Gold Night”晚会装饰的金矿，萧邦的舞台效果设计都是无以伦比的。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;今年，萧邦将以“一千零一夜”为主题，将这一传奇神话故事场景搬临现场，再次惊艳四座。</p><p>&nbsp;</p><p><strong style="margin: 0px; padding: 0px;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;源自“公平采矿”的金棕榈奖</strong></p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;金棕榈奖座(Palme d’Or)是被授予戛纳电影节官方竞赛单元最佳影片的最高荣誉，在萧邦日内瓦珠宝工坊中淬炼完成的奖座即将在5月22日的闭幕式上找到它的主人。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;2014年以来，这座传奇奖座一直采用公平采矿而来的黄金制成，以完全符合道德的方式从南非的小规模金矿社区手工开采而来，并通过了“公平金”认证。这一认证标准证明了开采过程严格遵守了经济、社会和环境开发法规。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;尽管自2013年起萧邦就一直参与这一道德主导的开采方式，目前也推出了好几款以“公平金”制成的珠宝，但戛纳电影节的金棕榈奖座仍然是萧邦长期承诺的最突出象征。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; 这座堪称所有电影人心中名副其实的圣杯并非一直是我们今天所熟识的外观造型，自电影节创立以来，此项至高奖项曾几经变换，直到萧邦为其设计的金棕榈叶造型，成为最雍容华贵的完美诠释而沿用至今。</p><p>&nbsp;</p><p><br/></p>', '2016-05-30 08:02:19'),
(22, '施华洛世奇与迈阿密设计展十年携手', '<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 14px; line-height: 22px; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px;"><span class="15" style="margin: 0px; padding: 0px; font-family: Arial; font-size: 10.5pt; letter-spacing: 0pt;">【导读】</span><span style="margin: 0px; padding: 0px; font-family: 宋体; font-size: 10.5pt; letter-spacing: 0pt;">国际</span><span style="margin: 0px; padding: 0px; font-family: Arial; font-size: 10.5pt; letter-spacing: 0pt;">珠宝网</span><span class="15" style="margin: 0px; padding: 0px; font-family: Arial; font-size: 10.5pt; letter-spacing: 0pt;">之</span></strong><a href="http://news.wto168.net/" style="margin: 0px; padding: 0px; color: rgb(43, 36, 26); text-decoration: none;"><strong style="margin: 0px; padding: 0px;"><span class="16" style="margin: 0px; padding: 0px; font-family: 宋体; font-size: 10.5pt;">每</span><span class="16" style="margin: 0px; padding: 0px; font-family: 宋体; font-size: 10.5pt;">日新闻</span></strong></a><strong style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: 宋体; font-size: 10.5pt;">：</span><a href="http://www.wto168.net/mg-shlsq/" style="margin: 0px; padding: 0px; color: rgb(43, 36, 26); text-decoration: none;">施华洛世奇</a>荣幸宣布与迈阿密设计展连续十年携手，再度竭诚合作。本年度，施华洛世奇委托位于墨西哥市的全球建筑设计事务所Fernando Romero Enterprise (FR-EE)创作装置作品，探索人类与太阳的关系。该巨大装置题为“El Sol”，运用测地学结构，依据设计尺寸为太阳的十亿分之一，由2880颗特别定制的精准切割施华洛世奇水晶构成。</strong></p><p>&nbsp;</p><p style="text-align: center;"><img src="/zhds/Public/upload/image/ueditor/20160530/1464595371836580.png" width="385" border="0" height="270" alt="施华洛世奇携手FR-EE事务所亮相2015 迈阿密设计展" style="margin: 0px; padding: 0px; border: none; cursor: pointer;"/></p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Sol的灵感来自于阿兹台克人和玛雅人建造金字塔时运用的神圣几何形状，这些古文明将之视为一种监测天界动态的手段。FR-EE的创始人兼创意总监Fernando Romero运用现代技术创作这一结构，致力于向古老文明致敬。这件作品的构建工作耗时350个小时，设计和技术开发则历时三个月，所有工作都在位于奥地利Wattens的施华洛世奇总部完成。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;El Sol呈现出球状的镂空内部结构，四种不同类型的定制精准切割仿水晶构成复杂的图案，这些图案组成了作品光滑的外层结构，而这些水晶的表面镀有施华洛世奇标志性的北极光（Aurora Borealis）镀层。装置中心是由LED构成的小球体，发出的光线经由仿水晶内部切面的折射，向四面八方发散，让人不禁想起太阳涌动的气态光球层。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Fernando Romero表示：“与施华洛世奇合作创作El Sol令我感到非常荣幸。这一项目让我能够探索与自然相关的数学以及我们的墨西哥古文明，这对于我的创作非常重要，且富有个人意义。”</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong style="margin: 0px; padding: 0px;"><a href="http://www.wto168.net/mg-shlsq/" style="margin: 0px; padding: 0px; color: rgb(43, 36, 26); text-decoration: none;">施华洛世奇</a></strong>执行董事会成员Nadja Swarovski评论道：“我们很高兴能在此庆祝这十年来与迈阿密设计展亲密无间的合作，也很荣幸携手Fernando Romero用一件视觉上和技术上都令人肃然起敬的作品庆祝这一盛事。这件作品对于我们的产品开发团队是个巨大挑战，Fernando探索了文化传承以及自然等相关主题，最终创作了El Sol，这是一件尺度宏大的拟真装置，我们非常期待在迈阿密见证最终成果。”</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Romero补充道：“El Sol中呈现出的几何图案呼应了自然界中的发现，提醒我们自然的肌理中蕴含着某些特定的比例。最终的作品旨在捕捉宇宙中这种奇妙的同步性，还有混沌和秩序之间神秘莫测的平衡。”</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; El Sol还将融入交互元素，为参观者提供欣赏这件装置作品的另一视角。主办方将为参观者提供特制的仿水晶手机摄像头镜头，这种镜头在拍摄照片时能够折射光线，创造出棱镜般的万花筒效果。</p><p><br/></p>', '2016-05-30 08:02:55'),
(23, '老凤祥名师高级定制揭幕', '<p>&nbsp;2016年4月22日，上海市工业美术设计协会理事长、中国工艺美术大师张京羊和沪上著名时尚主持人刘彦池共同为“<a href="http://www.wto168.net/mg-lfx/" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(43, 36, 26);"><strong style="margin: 0px; padding: 0px;">老凤祥</strong></a>名师高级定制”揭牌，使广大消费者想拥有个性化色彩的定制珠宝的需求得以满足。2016年，中国名师高级定制的风潮由此拉开了序幕。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;李克强总理在政府工作报告中，也特别强调“鼓励企业开展个性化定制、柔性化生产，培育精益求精的工匠精神”，以“创造新供给，释放新需求”。</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;创始于1848年的老凤祥，卓越的创新设计理念与精益求精的工匠精神代代相传。目前的老凤祥拥有国家级工艺美术大师7人、市级以上工艺美术大师18人，各类中高级技师87人，是老凤祥傲视群雄的核心竞争力之一。传承经典、创新时尚。迄今为止，老凤祥的大师们和新锐设计师团队已在国内、国际的专业设计比赛中获得了300多项奖项，一些作品已被国内外知名博物馆馆藏。“创意引领时尚，文化创造价值，技术艺术引导潮流，品牌营销赢得市场”。海派文化的大气睿智造就了老凤祥设计师们海纳百川、追求卓越的创意、创造、创新的精神特质，成为老凤祥高速发展、转型升级的动力之源，也是为消费者提供个性化设计与优质服务的雄厚基础。随着中国珠宝市场的日益成熟和细分市场的出现，老凤祥在传统的零售市场取得骄人业绩之后，求新求异独树一帜，针对需求强烈的高定市场，管理层率先决定针对中国珠宝高端市场，成立中国首家“老凤祥名师高级定制”，集材料、设计、制作、服务于一体，以弥补传统零售和网络零售之外的空白点。</p><p>&nbsp;</p><p style="text-align: center;"><img src="/zhds/Public/upload/image/ueditor/20160530/1464595409615483.png" width="450" border="0" height="275" alt="老凤祥名师高级定制揭幕——匠心精制传经典 名师荟萃创时尚" data-bd-imgshare-binded="1" style="margin: 0px; padding: 0px; border: none; cursor: pointer;"/><br style="margin: 0px; padding: 0px;"/>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp;“我们很欣喜地发现中国消费者成长得很快，他们对高端珠宝市场的需求变得日益强烈。当下<a href="http://www.wto168.net/mg-lfx/" style="margin: 0px; padding: 0px; text-decoration: none; color: rgb(43, 36, 26);"><strong style="margin: 0px; padding: 0px;">老凤祥</strong></a>品牌的知名度和美誉度，让这些高端消费者产生了极大的信任，因而我们有责任和义务，发挥我们整体的设计师团队优势特别是不可多得的工艺美术大师的资源，为高端珠宝市场提供服务。‘老凤祥名师高级定制’，将引领个性化设计与工匠精神结合的风尚，也是中国珠宝品牌参与国际市场的一种表现力。”老凤祥首席发言人、上海老凤祥有限公司市场部总经理王恩生先生如此介绍说。</p><p><br/></p>', '2016-05-30 08:03:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
