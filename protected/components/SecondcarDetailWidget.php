<?php

class SecondcarDetailWidget extends CWidget{

	public function run(){
		$data = array();
		$id = yii::app()->request->getParam("id", 0);
		$model = new SecondInfoForm();
		$model->id = $id;
		$data['car_info'] = $model->get_list_by_id();
		$this->render('secondcardetail' ,$data) ;
	}

}