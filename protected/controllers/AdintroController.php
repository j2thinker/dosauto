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
}