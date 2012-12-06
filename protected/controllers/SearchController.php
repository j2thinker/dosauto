<?php
class SearchController extends Controller{
	public function actionIndex(){
		$data = array();
		$search_data = Yii::app()->request->getParam("search_data", "");
		$data['search_data'] = $search_data;
		#查询并分页。
		
		$this->render('index', $data);
	}
}