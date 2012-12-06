<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'汽车管理系统',
	// preloading 'log' component
	//'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
	
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			//'showScriptName'=>false ,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=180.86.128.29;dbname=dosauto',
			'emulatePrepare' => true,
			'username' => 'dosauto_f',
			'password' => 'root',
			'charset' => 'utf8',
		),
		'db123'=>array(
			'connectionString' => 'mysql:host=10.210.213.74;port=3306;dbname=test',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '123456',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				)
			)
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		//后台导航左侧模块
		'adnav' => array(
			"index"	=> array(
					'轮播图管理'=>"/focuspic/piclist",
					'每页的图' => "/focuspic/focus",
				),
			"introman"	=> array(
					"公司简介"=>'/adintro/company/1',
					"品牌历史"=>'/adintro/company/2',
					"销售团队"=>'/adintro/company/3',
					"联系我们"=>'/adintro/company/4',
					"加入我们"=>'/adintro/asdba/333'
				),
			"newsman"	=> array(
					"最新活动"	=> "/newsman/activity?cid=3",
					"优惠促销"	=> "/newsman/forsale?cid=4",
					"公司新闻"	=> "/newsman/compnews?cid=1",
					"行业新闻"	=> "/newsman/businews?cid=2",
					"衍生服务"	=> "/newsman/service?cid=5",
					"团购消息"	=> "/tuan/adminlist/" ,
					"保养讲堂"	=> "/newsman/classroom?cid=6",
				),
			"second"	=> array(
					"二手车源"	=> "/newsman/activity?cid=3",
					"二手车置换"	=> "/newsman/forsale?cid=4",
					"汽车精品"	=> "/newsman/compnews?cid=1",
				),
			"show" => array(
					"aaa"=>'/adintro/joinuscat',
					"bbb"=>'/adintro/joinus',
			),
			"guide" => array(
					"衍生产品"	=>"/tuan/list",
					"新车预订"	=>"/tuan/list",
				),
			"service" => array(
					"预约试驾"	=> "/second/list",
					"保养评估"	=> "/second/change",
				),
			"club"	=> array(
				"车主关怀"		=> "/aaa" ,
				"车友活动"		=> "/bbb" ,
				"往期活动回顾"	=> "/ccc"
			)
		),

		'navname' => array(
			"index"		=> "首页",
			"introman"	=> "公司介绍",
			"newsman"	=> "新闻中心",
			"second"	=> "二手车服务",
			"show"		=> "汽车展厅",
			"guide"		=> "购车指南",
			"service"	=> "售后服务" ,
			"club"		=> "俱乐部"
		),
		
		"cateinfo" => array(
			1	=> '公司新闻' ,
			2	=> '行业新闻' ,
			3	=> '最新活动' ,
			4	=> '优惠促销' ,
			5	=> '衍生服务' ,
			6	=> '保养讲堂'
		),

		"attach" 	=> "/attachment/",
		"channel"	=> include(dirname(__FILE__) ."/channel.php")
	),
);