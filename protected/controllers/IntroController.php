<?php

class IntroController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		
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

	/**
	 * Get introduce information by type
	 * @param unknown_type $type
	 */
	private function getInfoByType($type){
		$model = new IntroduceForm();
		$model->intro_type = $type ;
		$model->limit = 1;
		$model->state = 1;
		$info = $model->get_list();
		$content = "";
		if($info && isset($info[0]) && isset($info[0]['content'])){
			$content = $info[0]['content'];
		}
		//$list = array(1=>'公司简介',2=>'品牌历史',3=>'销售团队',4=>'联系我们');
		$data['content'] = $content;
		return $data ;
	}
	
	/**
	 * About Company
	 * Enter description here ...
	 */
	public function actionAbout(){
		$data = $this->getInfoByType(1);
		$this->render('intro' , $data) ;
	}
	
	/**
	 * Product History
	 */
	public function actionHistory(){
		$data = $this->getInfoByType(2) ;
		$this->render('intro' ,$data) ;
	}
	
	/**
	 * Sale Group
	 */
	public function actionGroup(){
		$data = $this->getInfoByType(3);
		$this->render('intro' , $data) ;
	}
	
	/**
	 * Contact us
	 */
	public function actionContact(){
		$data = $this->getInfoByType(4) ;
		$this->render('intro' ,$data) ;
	}
	
	/**
	 * Join Us
	 */
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