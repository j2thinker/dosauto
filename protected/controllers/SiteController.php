<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	public function actionTest()
	{
		$this->render('test') ;
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	#简介页面，目前不做区分
	public function actionIntro(){
		$intro_type = $_GET['id'];
		$model = new IntroduceForm();
		$model->intro_type = $intro_type;
		$model->limit = 1;
		$model->state = 1;
		$info = $model->get_list();
		$content = "";
		if($info && isset($info[0]) && isset($info[0]['content'])){
			$content = $info[0]['content'];
		}
		$list = array(1=>'公司简介',2=>'品牌历史',3=>'销售团队',4=>'联系我们');
		$data['navigation'] = $list[$intro_type];
		$data['id'] = $intro_type;
		$data['content'] = $content;
		$this->render('intro', $data);
	}
	
	public function actionJoinus(){
		$data = array();
		#获取分类列表
		$model = new JobscateForm();
		$cat_list = $model->get_list();
		$data['cat_list'] = $cat_list;
		$first_cid = $cat_list[0]['id'];
		$cat_id = yii::app()->request->getParam("cat_id", $first_cid);
		$data['cat_id'] = $cat_id;
		#根据分类id获取职位列表
		$model = new JobsForm();
		$model->cat_id = $cat_id;
		$job_list = $model->get_list_by_cid();
		$data['jobs_list'] = $job_list;
		$this->render('joinus', $data);
	}
}