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
		$this->render('activity') ;
	}
	
	public function actionForsale() {
		$this->render('forsale') ;
	}
}