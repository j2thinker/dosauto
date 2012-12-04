<?php 
class InfonavWidget extends CWidget {  
	public function run(){
		$data = array() ;
		$controller 		= Yii::app()->controller->id ;
		
		$data['navinfo']	= Yii::app()->params['channel'][$controller] ;
		$data['action']		= Yii::app()->controller->action->id ;
		$data['controller'] = $controller ;
		$this->render('infonav' ,$data);  
	}  
}  