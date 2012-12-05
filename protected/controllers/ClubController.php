<?php
/**
 * 俱乐部栏目
 * @author zhaozaifeng
 *
 */
class ClubController extends Controller
{
	/**
	 * 车主关怀
	 */
	public function actionCare(){
		$data = array() ;
		$this->render('care' , $data) ;
	}
	
	/**
	 * 车友活动
	 */
	public function actionActivity(){
		$data = array() ;
		$this->render('activity' , $data) ;
	}
	
	/**
	 * 往期活动回顾
	 * @desc 
	 */
	public function actionReview(){
		$data = array() ;
		$this->render('activity' , $data) ;
	}
}