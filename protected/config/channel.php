<?php
return array(
	'site'=> array(
		'id' => 1,
		'title' 	=> "首页",
	),
	'intro'=> array(
		'id' => 2,
		'title'		=> "公司介绍",
		'namepic'	=> "gs_bt_jieshao.jpg" ,
		'actions'	=> array(
			'about'		=> '公司简介',
			'history'	=> '品牌历史',
			'group'		=> '销售团队',
			'contact'	=> '联系我们',
			'joinus'	=> '加入我们',
		),
		'endact' 	=> 'service',
	),
	'inform'=> array(
		'id' => 3,
		'title'		=> "新闻中心",
		'namepic'	=> "xw_bt_zhongxin.jpg" ,
		'actions'	=> array(
			'activity'	=> '最新活动',
			'sale'		=> '优惠促销',
			'compnews'	=> '公司新闻',
			'businews'	=> '行业新闻',
			'service'	=> '衍生服务',
			'groupbuy'	=> '团购消息',
			'mainten'	=> '保养课堂'
		),
		'endact' => 'mainten'
	),
	'secondcar'=> array(
		'id' => 4,
		'title'		=> "二手车服务",
		'namepic'	=> "es_bt_fuwu.jpg" ,
		'actions'	=> array(
			'market'	=> '二手车源',
			'renew'		=> '二手车置换',
			'boutique'	=> '汽车精品'
		),
		'endact' => 'boutique',
	),
	'show'=> array(
		'id' => 5,
		'title'		=> "汽车展厅",
		'namepic'	=> "xw_bt_zhongxin.jpg" ,
		'actions'	=> array(
			'activity'	=> '速腾',
			'sale'		=> '迈腾',
			'compnews'	=> '高尔夫',
			'businews'	=> '宝来',
		),
		'endact' => 'businews'
	),
	'guide'=> array(
		'id' => 6,
		'title'		=> "购车指南",
		'namepic'	=> "gc_bt_zhinan.jpg" ,
		'actions'	=> array(
			'product'	=> '衍生产品',
			'order'		=> '新车预订',
			'loan'	=> '车贷计算器'
		),
		'endact' => 'loan'
	),
	'service'=> array(
		'id' => 7,
		'title'		=> "售后服务",
		'namepic'	=> "sh_bt_fuwu.jpg" ,
		'actions'	=> array(
			'drivebook'	=> '预约试驾',
			'mainten'	=> '保养评估'
		),
		'endact' => 'mainten'
	),
	'club'=> array(
		'id' => 8,
		'title'		=> "俱乐部",
		'namepic'	=> "jl_bt_julebu.jpg" ,
		'actions'	=> array(
			'care'		=> '车主关怀',
			'activity'	=> '车友活动',
			'review'	=> '往期活动回顾'
		),
		'endact' => 'review' 
	)
) ;