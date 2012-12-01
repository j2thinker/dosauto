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