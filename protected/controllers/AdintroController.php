<?php
class AdintroController extends Controller{
	public $layout = false ;
	public function actionIndex(){
	}
	#公司简介
	public function actionCompany() {
		$menu_list = Yii::app()->params['adnav']['introman'];
		$type = $_REQUEST['id'];
		if(!$type){
			$type = 1;
		}
		$model = new IntroduceForm();
		$model->state = 1;
		$model->intro_type = $type;
		$list = $model->get_list();
		$this->layout = "adright" ;
		$data['list'] = $list;
		$data['intro_type'] = $type;
		$keys = array_keys($menu_list);
		$data['company_title'] = $keys[$type - 1];
		$this->render('company', $data) ;
	}
	public function actionAdd() {
		$this->layout = "adright" ;
		$edit_type = yii::app()->request->getParam("edit_type", 0);
		$id = yii::app()->request->getParam("id", 0);
		$intro_type = yii::app()->request->getParam("intro_type", 1);
		$title = $content = "";
		if($edit_type == 1 && $id){
			$model = new IntroduceForm();
			$model->id = $id;
			$info = $model->get_list_by_id();
			if ($info){
				$id = $info['id'];
				$title = $info['title'];
				$content = $info['content'];
				$intro_type = $info['intro_type'];
			}
		}
		$data['id'] = $id;
		$data['title'] = $title;
		$data['content'] = $content;
		$data['intro_type'] = $intro_type;
		$this->render('add', $data);
	}
	public function actionAddsave(){
		$id = yii::app()->request->getPost("id", 0);
		$title = yii::app()->request->getPost("title", "");
		$intro_type = yii::app()->request->getPost("intro_type", "");
		$content = yii::app()->request->getPost("content", "");
		$model = new IntroduceForm();
		$model->id = $id;
		$model->title = $title;
		$model->content = $content;
		$model->ctime = time();
		$model->state = 1;
		$model->intro_type = $intro_type;
		$re = $model->save();
		$this->layout = "adright" ;
		$_REQUEST['id'] = $intro_type;
		$this->actionCompany();
	}
	public function actionDel(){
		$id = yii::app()->request->getParam("id", 0);
		$intro_type = yii::app()->request->getParam("intro_type", 0);
		$model = new IntroduceForm();
		$model->id = $id;
		$re = $model->delete();
		$this->layout = "adright" ;
		$_REQUEST['id'] = $intro_type;
		$this->actionCompany();
	}
	
	
	public function actionJoinuscat(){
		$this->layout = "adright" ;
		$data = array();
		$model = new JobscateForm();
		$list = $model->get_list();
		$data['list'] = $list;
		$this->render('joinuscat', $data);
	}
	public function actionJoinuscatadd() {
		$this->layout = "adright" ;
		$edit_type = yii::app()->request->getParam("edit_type", 0);
		$cate_name = "";
		$id = yii::app()->request->getParam("id", 0);
		
		if($edit_type == 1 && $id){
			$model = new JobscateForm();
			$model->id = $id;
			$info = $model->get_list_by_id();
			if ($info){
				$id = $info['id'];
				$cate_name = $info['cate_name'];
			}
		}
		$data['id'] = $id;
		$data['cate_name'] = $cate_name;
		$this->render('joinuscatadd', $data);
	}
	public function actionJoinuscataddsave(){
		$id = yii::app()->request->getPost("id", 0);
		$cate_name = yii::app()->request->getPost("cate_name", "");
		$model = new JobscateForm();
		$model->id = $id;
		$model->cate_name = $cate_name;
		$re = $model->save();
		$this->layout = "adright" ;
		$_REQUEST['id'] = $id;
		$this->actionJoinuscat();
	}
	public function actionJoinuscatdelete(){
		$id = yii::app()->request->getParam("id", 0);
		$model = new JobscateForm();
		$model->id = $id;
		$re = $model->delete();
		$this->layout = "adright" ;
		$this->actionJoinuscat();
	}

	

	public function actionJoinus(){
		$this->layout = "adright" ;
		$data = array();
		$model = new JobsForm();
		$list = $model->get_list();
		$data['list'] = $list;
		$model = new JobscateForm();
		$cat_list = $model->get_list();
		foreach ($cat_list as $v){
			$tmp[$v['id']] = $v;
		}
		$data['cat_list'] = $tmp;
		$this->render('joinus', $data);
	}
	public function actionJoinusadd() {
		$this->layout = "adright" ;
		$edit_type = yii::app()->request->getParam("edit_type", 0);
		$id = yii::app()->request->getParam("id", 0);
		$cat_id = 0;
		$intro_type = 1;
		$jobs_name = $jobs_info = $email = "";
		if($edit_type == 1 && $id){
			$model = new JobsForm();
			$model->id = $id;
			$info = $model->get_list_by_id();
			if ($info){
				$id = $info['id'];
				$cat_id = $info['cat_id'];
				$jobs_name = $info['jobs_name'];
				$jobs_info = $info['jobs_info'];
				$email = $info['email'];
			}
		}
		$model = new JobscateForm();
		$cat_list = $model->get_list();
		$data['cat_list'] = $cat_list;
		$data['id'] = $id;
		$data['cat_id'] = $cat_id;
		$data['jobs_name'] = $jobs_name;
		$data['jobs_info'] = $jobs_info;
		$data['email'] = $email;
		$this->render('joinusadd', $data);
	}
	public function actionJoinusaddsave(){
		$id = yii::app()->request->getPost("id", 0);
		$jobs_name = yii::app()->request->getPost("jobs_name", "");
		$jobs_info = yii::app()->request->getPost("jobs_info", "");
		$email = yii::app()->request->getPost("email", "");
		$cat_id = yii::app()->request->getPost("cat_id", 1);
		
		$model = new JobsForm();
		$model->id = $id;
		$model->jobs_name = $jobs_name;
		$model->jobs_info = $jobs_info;
		$model->email = $email;
		$model->cat_id = $cat_id;
		$model->ctime = time();
		$re = $model->save();
		$this->layout = "adright" ;
		$_REQUEST['id'] = $id;
		$this->actionJoinus();
	}
	
	public function actionJoinusdelete(){
		$id = yii::app()->request->getParam("id", 0);
		$model = new JobsForm();
		$model->id = $id;
		$re = $model->delete();
		$this->layout = "adright" ;
		$this->actionJoinus();
	}
}