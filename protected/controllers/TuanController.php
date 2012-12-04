<?php
class TuanController extends Controller
{
	public $layout = "adright" ;
	public function actionList()
	{
		$this->layout = 'doslayout' ;
		$this->render('list');
	}
	
	public function actionAdd(){
		$this->render('add') ;
	}
	
	public function actionAdminList(){
		$this->render('adminlist') ;
	}
}