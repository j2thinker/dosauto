<?php

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
	
	
	public function actionActivity()
	{
		$this->render('activity') ;
	}
	
	public function actionForsale()
	{
		$this->render('forsale') ;
	}
}