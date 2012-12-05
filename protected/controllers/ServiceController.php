<?php
class ServiceController extends Controller
{
	public function actionDriveBook(){
		$this->render('drivebook') ;
	}
	
	public function actionMainten(){
		$data = array();
		$this->render('mainten' , $data) ;
	}
}