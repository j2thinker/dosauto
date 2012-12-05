<?php
/**
 * 二手车信息控制器
 * Enter description here ...
 * @author Administrator
 *
 */
class SecondController extends Controller{
	
	public $layout = false;
	
	public function actionIndex(){

	}
	
	public function actionList(){
		$this->layout = "adright" ;
		$model = new SecondInfoForm();
		$list = $model->get_lately_list();
		$data['list'] = $list;
		$this->render('list', $data) ;
	}
	
	public function actionAdd(){
		$this->layout = "adright" ;
		$data = array();
		$model = new SecondInfoForm();
		$is_best = yii::app()->request->getParam("best", 0);
		if($is_best == 1){			//精品汽车
			$data['from_best'] = 1; 
		}else{
		}
		$this->render('add', $data);
	}
	
	//新加二手车信息
	public function actionSave(){
		$this->layout = "adright" ;
		$model = new SecondInfoForm();
		$model->id = yii::app()->request->getPost("id", 0);
		$model->title = yii::app()->request->getPost("title", "");
		$model->cate = yii::app()->request->getPost("cate", "");
		$model->color = yii::app()->request->getPost("color", "");
		$model->auto_info = yii::app()->request->getPost("auto_info", "");
		$model->contract_tel = yii::app()->request->getPost("contract_tel", "");
		$model->gearbox = yii::app()->request->getPost("gearbox", "");
		$model->is_best = yii::app()->request->getPost("is_best", 0);
		$model->state = yii::app()->request->getPost("state", "");
		$model->motor = yii::app()->request->getPost("motor", "");
		$model->outpub = yii::app()->request->getPost("outpub", "");
		$model->plate_number_time = yii::app()->request->getPost("plate_number_time", "");
		$model->price = yii::app()->request->getPost("price", "");
		$model->pubcomp = yii::app()->request->getPost("pubcomp", "");
		$model->pubtime = yii::app()->request->getPost("pubtime", "");
		$model->roadhaul = yii::app()->request->getPost("roadhaul", "");
		$model->pic_one = yii::app()->request->getPost("pic_one", "");
		$model->pic_two = yii::app()->request->getPost("pic_two", "");
		$model->pic_three = yii::app()->request->getPost("pic_three", "");
		$model->pic_four = yii::app()->request->getPost("pic_four", "");
		$re = $model->add();
		$from = yii::app()->request->getParam("from", '');
		if($from == 'best' ){
			$this->actionBest();
		}else{
			$this->actionList();
		}
		
	}
	
	//删除二手车信息
	public function actionDel(){
		$this->layout = "adright" ;
		$model = new SecondInfoForm();
		$model->id = yii::app()->request->getParam("id", 0);
		$model->delete();
		$from = yii::app()->request->getParam("from", '');
		if($from == 'best'){
			$this->actionBest();
		}else{
			$this->actionList();
		}
	}
	
	//编辑二手车信息
	public function actionEdit(){
		$this->layout = "adright" ;
		$model = new SecondInfoForm();
		$model->id = yii::app()->request->getParam("id", 0);
		$list = $model->get_list_by_id();
		$data['list'] = $list;
		$data['is_edit'] = true;
		$from = yii::app()->request->getParam("from", '');
		if($from == 'best'){
			$data['from_best'] = true;
		}
		$this->render('add', $data) ;
	}
	
	//查看精品二手车信息
	public function actionBest(){
		$this->layout = "adright" ;
		$model = new SecondInfoForm();
		$list = $model->get_best_list();
		$data['list'] = $list;
		$data['is_best'] = true;
		$this->render('list', $data) ;
	}
	
	//===============以下是前台展示==================
	/**
	 * 二手车源
	 * @desc second hand car source 
	 */
	public function actionMarket()
	{
		$this->layout = "doslayout" ;
		$data = array() ;
		$this->render('market' , $data) ;
	}

	/**
	 * 二手车置换
	 * Enter description here ...
	 */
	public function actionRenew(){
		$this->layout = "doslayout" ;
		$this->render('renew') ;
	}
	
	/**
	 * 汽车精品
	 * Enter description here ...
	 */
	public function actionBoutique(){
		$this->layout = "doslayout" ;
		$data = array() ;
		$this->render('boutique' , $data) ;
	}
}
