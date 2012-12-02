<?php
/**
 * News and Activity management
 * @author zzlove
 */
class NewsmanController extends Controller{
	public $layout = false ;
	public function actionIndex(){
		
	}
	
	public function actionActivity() {
		$this->layout = "adright" ;
		$this->render('activity') ;
	}
	
	public function actionForsale() {
		$this->render('forsale') ;
	}
	
	public function actionAddinfo(){
		$this->layout = "adright" ;
		$this->render('addinfo') ;
	}
}