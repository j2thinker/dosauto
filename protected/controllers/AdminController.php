<?php
/**
 * Backward admin controller
 * Enter description here ...
 * @author zzlove
 *
 */
class AdminController extends Controller
{
	public $layout = false;
	/**
	 * Index Page 
	 * Enter description here ...
	 */
	public function actionIndex(){
		$this->layout = "adminly" ;
		$this->render('adindex') ;
	}
	
	/**
	 * Login Action
	 * 
	 * @desc Enter Admin manage system
	 */
	public function actionLogin(){
		$this->render('login') ;
	}
	
	//===================== Don't Modified blow ========================
	/**
	 * Left navigator
	 * Enter description here ...
	 */
	public function actionLeftNav(){
		$this->render("leftnav");
	}
	
	public function actionTopNav(){
		$this->render("topnav") ;
	}
	
	public function actionRightNav(){
		$this->render("rightnav") ;
	}
}