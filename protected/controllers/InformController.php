<?php
class InformController extends Controller{
	
	public function actionIndex(){
		
	}
	
	/**
	 * (non-PHPdoc)
	 * @see CController::actions()
	 */
	public function actions(){
		
	}
	
	public function actionDetail(){
		$nid = Yii::app()->request->getParam('nid') ;
		$ninfo = Info::model()->findByPk($nid) ;
		$this->render('detail' , array('ninfo'=>$ninfo)) ;
	}
	
	private function renderTemplate($type){
		$page = Yii::app()->request->getParam('page' , 1) ;
		$pagesize = Yii::app()->request->getParam('pagesize' , 6) ;
		$criteria = new CDbCriteria() ;
		$criteria->addCondition("category={$type}") ;
		$criteria->addCondition("state=1" , 'AND') ;
		$criteria->order ="priority desc ,ctime desc" ;
		
		$count = Info::model()->count($criteria);
		$reclist = array();
		if($count>0){
			$criteria->offset = ($page - 1)*$pagesize ;
			$criteria->limit  = $pagesize ;
			$reclist = Info::model()->findAll($criteria) ; 
		}
		$pager = new CPagination($count);    
        $pager->pageSize = $pagesize ;             
        $pager->applyLimit($criteria);
        
        $this->render('reclist' , array('pages'=>$pager , 'reclist'=>$reclist)) ;
	}
	
	public function actionGroupBuy()
	{
		//get data from database
		$this->render('groupbuylist');
	}
	
	public function actionActivity(){
		$this->renderTemplate(3) ; 
	}
	
	public function actionSale(){
		$this->renderTemplate(4) ; 
	}
	
	public function actionCompNews(){
		$this->renderTemplate(1) ; 
	}
	
	public function actionBusinews(){
		$this->renderTemplate(2) ; 
	}
	
	public function actionService(){
		$this->renderTemplate(5) ; 
	}
	
	public function actionMainten(){
		$this->renderTemplate(6) ; 
	}
	
}