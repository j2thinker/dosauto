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
			'connectionString' => 'mysql:host=10.210.213.74;dbname=dosauto',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		/* 'db'=>array(
				'connectionString' => 'mysql:host=10.210.213.74;port=3306;dbname=test',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => '123456',
				'charset' => 'utf8',
		), */
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
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		//后台导航左侧模块
		'adnav' => array(
			"index"		=> array('轮播图管理'=>"/admin/switch"),
			"newsman"	=> array(
					"最新活动"=> "/newsman/activity?cid=3",
					"优惠促销"=> "/newsman/forsale?cid=4",
					"公司新闻"=> "/newsman/compnews?cid=1",
					"行业新闻"=> "/newsman/businews?cid=2",
					"衍生服务"=> "/newsman/service?cid=5",
					"保养讲堂"=> "/newsman/classroom?cid=6",
				),
			"introman"	=> array(
					"公司简介"=>'/adintro/company/1',
					"品牌历史"=>'/adintro/company/2',
					"销售团队"=>'/adintro/company/3',
					"联系我们"=>'/adintro/company/4',
					"加入我们-职位分类"=>'/adintro/joinuscat',
					"加入我们-职位详情"=>'/adintro/joinus',
				),		
			"tuan" => array(
					"团购管理"=>"/tuan/list"
				),
		),

		'navname' => array(
			"index"		=> "首页",
			"newsman"	=> "信息管理",
			"introman"	=> "简介管理",
			"tuan"		=> "团购信息",
			"second"	=> "二手",
		),
		"cateinfo" => array(
			1	=> '公司新闻' ,
			2	=> '行业新闻' ,
			3	=> '最新活动' ,
			4	=> '优惠促销' ,
			5	=> '衍生服务' ,
			6	=> '保养讲堂'
		),
		"attach" => "/attachment/",
	),
);