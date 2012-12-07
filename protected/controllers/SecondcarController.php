<?php
/**
 * 二手车信息前台控制器
 * Enter description here ...
 * @author Administrator
 *
 */
class SecondcarController extends Controller{
	
	
	public function actionIndex(){

	}

	
	//查看二手车信息
	public function actionList( ){
		$model = new SecondInfoForm();
		$list = $model->get_lately_list();
		$data['list'] = $list;
		return $data;
	}
	
	//查看精品二手车信息
	public function actionBest( ){
		$model = new SecondInfoForm();
		$list = $model->get_best_list();
		$data['list'] = $list;
		$data['is_best'] = true;
		return $data;
	}
	
	/**
	 * 二手车源
	 * @desc second hand car source 
	 */
	public function actionMarket()
	{
		$this->layout = "doslayout" ;
		$id = yii::app()->request->getParam("id", 0);
		$data = array() ;
		$data = $this->actionList(true);
		if(!empty($id)){
			$data['is_car_detail'] = true;			//是否为二手车详情页
		}
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
		$id = yii::app()->request->getParam("id", 0);
		if(!empty($id)){
			$data['is_car_detail'] = true;			//是否为精品二手车详情页
		}else{
			$data = $this->actionBest();
		}
		$this->render('boutique' , $data) ;
	}
}
