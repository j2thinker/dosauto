#auto_introduce
#标题 简介内容(支持文字和图片) 发表日期 状态(删除) 类型(车主关怀/)
#title varchar(120)
#content text
#ctime int
#state tinyint 0为正常，1为删除。默认为0
#intro_type  tinyint 公司简介 品牌历史	销售团队	联系我们 车主关怀 衍生产品 保养预估

DROP TABLE  IF EXISTS `auto_introduce`;
CREATE TABLE `auto_introduce`(
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
CREATE TABLE `auto_jobs_cate`(
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
CREATE TABLE `auto_jobs_info`(
`id` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
`jobs_name` varchar(120) not null default '',
`jobs_info` text not null default '',
`ctime` int(11) not null default 0,
`email` tinyint(1) not null default 0,
`cat_id` int(10) not null default 0
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

#信息表，表名有auto_news 变更为 auto_info,表中字段略有变更
CREATE TABLE `auto_info` (
 `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
 `title` varchar(120) NOT NULL DEFAULT ' ' COMMENT '信息标题',
 `pic_url` varchar(120) NOT NULL DEFAULT ' ' COMMENT '图片地址',
 `descript` varchar(240) NOT NULL DEFAULT ' ' COMMENT '信息简述',
 `content` text NOT NULL COMMENT '信息详情',
 `ctime` int(11) NOT NULL COMMENT '信息创建时间',
 `endtime` int(11) NOT NULL COMMENT '失效时间',
 `category` int(11) NOT NULL DEFAULT '1' COMMENT '信息类别1.新闻，2.为活动，3.保养讲堂 4.衍生服务',
 `priority` tinyint(4) NOT NULL DEFAULT '1' COMMENT '信息权重 权重越高越靠前',
 `state` tinyint(4) NOT NULL DEFAULT '0' COMMENT '信息状态 默认0.正常 1.删除 ',
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#团购表
CREATE TABLE `auto_tuan` (
 `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
 `pic_url` varchar(120) NOT NULL COMMENT '显示图片',
 `link` varchar(120) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='团购表';



