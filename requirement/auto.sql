use dosauto ;
#auto_introduce
#标题 简介内容(支持文字和图片) 发表日期 状态(删除) 类型(车主关怀/)
#title varchar(120)
#content text
#ctime int
#state tinyint 0为正常，1为删除。默认为0
#intro_type  tinyint 公司简介 品牌历史	销售团队	联系我们 车主关怀 衍生产品 保养预估

DROP TABLE  IF EXISTS `auto_introduce`;
CREATE TABLE IF NOT EXISTS `auto_introduce`(
`id` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
`title` varchar(120) not null default '',
`content` text,
`ctime` int(10) unsigned not null,
`state` tinyint(1) unsigned not null default 0,
`intro_type` tinyint(1)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

#4.加入我们：
#1)auto_jobs_cate：分类表
#id  id int(11) auto_increment not null
#分类名称  cate_name varchar(120)
#类型(type，为将来作导航使用)  cate tinyint

DROP TABLE  IF EXISTS `auto_jobs_cate`;
CREATE TABLE IF NOT EXISTS `auto_jobs_cate`(
`id` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
`cate_name` varchar(120) not null default '',
`cate` tinyint(1) not null default 0
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

#2)auto_jobs_info:职位详细表
#职位名称 jobs_name varchar(120)
#职位简介信息 jobs_info text
#日期 ctime int
#hr邮箱 email varchar(30)
#所在分类id. cate_id int 

DROP TABLE  IF EXISTS `auto_jobs_info`;
CREATE TABLE IF NOT EXISTS `auto_jobs_info`(
`id` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
`jobs_name` varchar(120) not null default '',
`jobs_info` text not null default '',
`ctime` int(11) not null default 0,
`email` varchar(30) not null default '',
`cat_id` int(10) not null default 0
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

#信息表，表名有auto_news 变更为 auto_info,表中字段略有变更
CREATE TABLE IF NOT EXISTS `auto_info` (
 `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
 `title` varchar(120) NOT NULL DEFAULT ' ' COMMENT '信息标题',
 `pic_url` varchar(120) NOT NULL DEFAULT ' ' COMMENT '图片地址',
 `descript` varchar(240) NOT NULL DEFAULT ' ' COMMENT '信息简述',
 `content` text NOT NULL COMMENT '信息详情',
 `ctime` int(11) NOT NULL COMMENT '信息创建时间',
 `endtime` int(11) NOT NULL COMMENT '失效时间',
 `category` int(11) NOT NULL DEFAULT 1 COMMENT '信息类别1.新闻，2.为活动，3.保养讲堂 4.衍生服务',
 `priority` tinyint(4) NOT NULL DEFAULT 1 COMMENT '信息权重 权重越高越靠前',
 `state` tinyint(4) NOT NULL DEFAULT '0' COMMENT '信息状态 默认0.正常 1.删除 ',
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#团购表
CREATE TABLE `auto_tuan` (
 `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
 `pic_url` varchar(120) NOT NULL COMMENT '显示图片',
 `link` varchar(120) NOT NULL,
 `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '团购状态',
 `ctime` int(11) NOT NULL COMMENT '创建时间',
 `priority` tinyint(4) NOT NULL DEFAULT '0' COMMENT '权重',
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='团购表'


#首页焦点图中图片表：
CREATE TABLE IF NOT EXISTS `focus_pic` (
  `pid` int(11) NOT NULL auto_increment COMMENT '图片ID',
  `pic_src` varchar(120) NOT NULL default '' COMMENT '图片地址',
  `pic_link` varchar(120) NOT NULL default '' COMMENT '链接地址',
  PRIMARY KEY  (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;      

#首页焦点图中页面焦点图表
CREATE TABLE IF NOT EXISTS `page_focus_pic` (
  `id` int(11) NOT NULL auto_increment COMMENT '主键',
  `page_id` int(11) NOT NULL default 0 COMMENT '页面ID',
  `pid_list` varchar(200) NOT NULL default '' COMMENT '图片ID列表',
  PRIMARY KEY  (`id`),
  KEY `page_id` (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#二手车置换数据表：
 CREATE TABLE IF NOT EXISTS `auto_secondhand_change` (
  `id` int(11) NOT NULL auto_increment COMMENT '主键',
  `cat` varchar(120) NOT NULL default '' COMMENT '车辆型号',
  `motor_output` varchar(120) NOT NULL default '' COMMENT '发动机排量',
  `gearbox` varchar(120) NOT NULL default '' COMMENT '变速箱类型',
  `roadhaul` int(11) NOT NULL default 0 COMMENT '行驶里程',
  `motor_cate` varchar(120) NOT NULL default '' COMMENT '发动机类型',
  `color` varchar(120) NOT NULL default '' COMMENT '外部颜色',
  `ask_shop_name` varchar(120) NOT NULL default '' COMMENT '询问店名',
  `plate_number_time` int(11) NOT NULL default 0 COMMENT '上牌时间',
  `old_info` text NOT NULL default '' COMMENT '发布置换车辆详细说明',
  `new_info` text NOT NULL default '' COMMENT '拟置换的新车详细说明',
  `name` varchar(120) NOT NULL default '' COMMENT '姓名',
  `sex` tinyint(1) unsigned NOT NULL default 0 COMMENT '性别',
  `tel` int(11) NOT NULL default 0 COMMENT '联系电话',
  `contact_addr` varchar(120) default '' COMMENT '联系地址',
  `email` varchar(30) default '' COMMENT 'email地址',
  `ctime` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


#二手车源及汽车精品数据表：
CREATE TABLE IF NOT EXISTS `auto_secondhand_info` (
  `id` int(11) NOT NULL auto_increment COMMENT '主键',
  `title` varchar(120) NOT NULL default '' COMMENT '标题',
  `cate` varchar(120) NOT NULL default '' COMMENT '车型/车系',
  `motor` varchar(120) NOT NULL default '' COMMENT '发动机',
  `gearbox` varchar(120) NOT NULL default '' COMMENT '变速箱',
  `outpub` varchar(120) NOT NULL default '' COMMENT '排量',
  `color` varchar(120) NOT NULL default '' COMMENT '外部颜色',
  `roadhaul` int(11) NOT NULL default '0' COMMENT '行驶里程',
  `plate_number_time` int(11) NOT NULL default '0' COMMENT '上牌日期',
  `price` int(11) NOT NULL default '0' COMMENT '价格',
  `pubtime` int(11) NOT NULL default '0' COMMENT '发布日期',
  `pubcomp` varchar(50) NOT NULL default '' COMMENT '发布单位',
  `contract_tel` int(11) NOT NULL default '0' COMMENT '联系电话',
  `auto_info` text NOT NULL COMMENT '车辆简介',
  `pic_one` varchar(120) NOT NULL default '' COMMENT '车辆图片1',
  `pic_two` varchar(120) NOT NULL default '' COMMENT '车辆图片2',
  `pic_three` varchar(120) NOT NULL default '' COMMENT '车辆图片3',
  `pic_four` varchar(120) NOT NULL default '' COMMENT '车辆图片4',
  `state` tinyint(4) NOT NULL default '0' COMMENT '状态（过期等）',
  `is_best` tinyint(1) NOT NULL default '0' COMMENT '0为默认值，1为精品',
  `ctime` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


#新车预订表
CREATE TABLE IF NOT EXISTS `auto_plan_buy`(
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(120) NOT NULL default '' COMMENT '姓名',
  `tel` int(11) NOT NULL default '0' COMMENT '电话',
  `buy_time` int(11) NOT NULL default '0' COMMENT '购车时间',
  `atuo_id` int(11) NOT NULL default '0',
  `cat` tinyint(1) NOT NULL default '0',
  `ctime` int(11) NOT NULL default '0',
  `stae` tinyint(1) NOT NULL default '0' COMMENT '0为未处理状态,1为处理完的',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
