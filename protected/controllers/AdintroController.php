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
		$edit_type = $_GET['edit_type'];
		$id = 0;
		$intro_type = 1;
		if (isset($_GET['id'])  && $_GET['id']){
			$id = $_GET['id'];
		}
		if (isset($_GET['intro_type']) && $_GET['intro_type']){
			$intro_type = $_GET['intro_type'];
		}
		
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
		$id = $_POST['id'];
		$title = $_POST['title'];
		$type = $_POST['intro_type'];
		$content = $_POST['content'];
		$model = new IntroduceForm();
		$model->id = $id;
		$model->title = $title;
		$model->content = $content;
		$model->ctime = time();
		$model->state = 1;
		$model->intro_type = $type;
		$re = $model->save();
		$this->layout = "adright" ;
		$_REQUEST['id'] = $type;
		$this->actionCompany();
	}
	public function actionDelete(){
		$title = $_POST['title'];
		$type = $_POST['intro_type'];
		$content = $_POST['content'];
		$model = new IntroduceForm();
		$model->title = $title;
		$model->content = $content;
		$model->ctime = time();
		$model->state = 1;
		$model->intro_type = $type;
		$re = $model->save();
		$this->layout = "adright" ;
		$_REQUEST['id'] = $type;
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
		$edit_type = 0;
		if (isset($_GET['edit_type'])){
			$edit_type = $_GET['edit_type'];
		}
		$id = 0;
		$intro_type = 1;
		$cate_name = "";
		if (isset($_GET['id'])  && $_GET['id']){
			$id = $_GET['id'];
		}
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
		$id = $_POST['id'];
		$cate_name = "";
		$cate_name = $_POST['cate_name'];
		$model = new JobscateForm();
		$model->id = $id;
		$model->cate_name = $cate_name;
		$re = $model->save();
		$this->layout = "adright" ;
		$_REQUEST['id'] = $id;
		$this->actionJoinuscat();
	}
	public function actionJoinuscatdelete(){
		$id = $_GET['id'];
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
		$this->render('joinus', $data);
	}
	public function actionJoinusadd() {
		$this->layout = "adright" ;
		$edit_type = 0;
		if (isset($_GET['edit_type'])){
			$edit_type = $_GET['edit_type'];
		}
		$cat_id = $id = 0;
		$intro_type = 1;
		$jobs_name = $jobs_info = $email = "";
		if (isset($_GET['id'])  && $_GET['id']){
			$id = $_GET['id'];
		}
		if($edit_type == 1 && $id){
			$model = new JobsForm();
			$model->id = $id;
			$info = $model->get_list_by_id();
			if ($info){
				$id = $info['id'];
				$jobs_name = $info['jobs_name'];
				$jobs_info = $info['jobs_info'];
				$email = $info['email'];
			}
		}
		$data['id'] = $id;
		$data['cat_id'] = $cat_id;
		$data['jobs_name'] = $jobs_name;
		$data['jobs_info'] = $jobs_info;
		$data['email'] = $email;
		$this->render('joinusadd', $data);
	}
	public function actionJoinusaddsave(){
		$id = $_POST['id'];
		$jobs_name = $_POST['jobs_name'];
		$jobs_info = $_POST['jobs_info'];
		$email = $_POST['email'];
		$cat_id = $_POST['cat_id'];
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
		$this->actionJoinuscat();
	}
	public function actionJoinusdelete(){
		$id = $_GET['id'];
		$model = new JobsForm();
		$model->id = $id;
		$re = $model->delete();
		$this->layout = "adright" ;
		$this->actionJoinuscat();
	}
}