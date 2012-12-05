<?php
class GuideController extends Controller
{
	/**
	 * 衍生产品
	 */
	public function actionProduct(){
		$data = array();
		$this->render('product' , $data) ;
	}
	
	/**
	 * 新车预订
	 */
	public function actionOrder(){
		$this->render('order') ;
	}
	
	/**
	 * 贷款计算器
	 */
	public function actionLoan(){
		$this->render('loan') ;
	}
}