<?php
class TuanController extends Controller
{
	public $layout = "adright" ;
	public function actionList()
	{
		$this->render('list') ;
	}
	
	public function actionAdd(){
		$this->render('add') ;
	}
}