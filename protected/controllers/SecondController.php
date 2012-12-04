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
	



}
