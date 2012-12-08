<?php
/**
 * 二手车信息前台控制器
 * Enter description here ...
 * @author Administrator
 *
 */
class SecondcarController extends Controller{
	
	
	public function actionIndex(){

	}

	
	//查看二手车信息
	public function actionList( ){
		$model = new SecondInfoForm();
		$list = $model->get_lately_list();
		$data['list'] = $list;
		return $data;
	}
	
	//查看精品二手车信息
	public function actionBest( ){
		$model = new SecondInfoForm();
		$list = $model->get_best_list();
		$data['list'] = $list;
		$data['is_best'] = true;
		return $data;
	}
	
	/**
	 * 二手车源
	 * @desc second hand car source 
	 */
	public function actionMarket()
	{
		$this->layout = "doslayout" ;
		$data = array() ;
		$id = yii::app()->request->getParam("id", 0);
		if(!empty($id)){
			$data['is_car_detail'] = true;			//是否为二手车详情页
		} else {
			$page = Yii::app()->request->getParam('page' , 1) ;
			$pagesize = Yii::app()->request->getParam('pagesize' , 9) ;
			
			$criteria = new CDbCriteria();
			$criteria->addCondition("is_best=0") ;				//普通二手车源 标识
			$criteria->addCondition("state=0" ,'AND') ;  
	        $criteria->order = 'ctime desc';
	    	$count=SecondhandInfo::model()->count($criteria);	//获获二手车源记录总数
		    if($count>0){
	        	$criteria->offset = ($page -1) * $pagesize ;
	        	$criteria->limit = $pagesize ;
	        	$list = SecondhandInfo::model()->findAll($criteria) ;
	        }
	        $pager = new CPagination($count);
	        $pager->pageSize	= $pagesize ;
	        $pager->applyLimit($criteria) ;
	        $data['pages'] = $pager ;
	        $data['list'] = $list ;
		}
		$this->render('market' , $data) ;
	}

	/**
	 * 二手车置换
	 * Enter description here ...
	 */
	public function actionRenew(){
		$this->layout = "doslayout" ;
		$this->render('renew') ;
	}
	
	/**
	 * 汽车精品
	 */
	public function actionBoutique(){
		$this->layout = "doslayout" ;
		$data = array() ;
		$id = yii::app()->request->getParam("id", 0);
		if(!empty($id)){
			$data['is_car_detail'] = true;			//是否为精品二手车详情页
		}else{
			$page = Yii::app()->request->getParam('page' , 1) ;
			$pagesize = Yii::app()->request->getParam('pagesize' , 8) ;
			
			$criteria = new CDbCriteria();
			$criteria->addCondition("is_best=1") ;				//精品二手车源 标识
			$criteria->addCondition("state=0" ,'AND') ;  
	        $criteria->order = 'ctime desc';
	    	$count=SecondhandInfo::model()->count($criteria);	//获获二手车源记录总数
		    if($count>0){
	        	$criteria->offset = ($page -1) * $pagesize ;
	        	$criteria->limit = $pagesize ;
	        	$list = SecondhandInfo::model()->findAll($criteria) ;
	        }
	        $pager = new CPagination($count);
	        $pager->pageSize	= $pagesize ;
	        $pager->applyLimit($criteria) ;
	        $data['pages'] = $pager ;
	        $data['list'] = $list ;
    
		}
		$this->render('boutique' , $data) ;
	}
	
	public function actionRenewadd(){
		$model = new AutoSecondhandChange();
		$request = Yii::app()->request ;
		$model->cat					= 	$request->getParam('cat') ;
		$model->motor_output		= 	$request->getParam('motor_output') ;
		$model->gearbox				= 	$request->getParam('gearbox') ;
		$model->roadhaul			= 	$request->getParam('roadhaul') ;
		$model->motor_cate			= 	$request->getParam('motor_cate') ;
		
		$model->color				=	$request->getParam('color') ;
		$model->ask_shop_name		= 	$request->getParam('ask_shop_name') ;
		$model->plate_number_time	=	$request->getParam('plate_number_time') ;
		$model->old_info			= 	$request->getParam('old_info') ;
		$model->new_info			= 	$request->getParam('new_info') ;
		$model->name				= 	$request->getParam('name') ;
		$model->sex					= 	$request->getParam('sex') ;
		$model->tel					= 	$request->getParam('tel') ;
		$model->contact_addr		= 	$request->getParam('contact_addr') ;
		$model->email				= 	$request->getParam('email') ;
		$model->ctime				= 	time() ;	
	
		if($model->save()){
			$this->redirect('/index.php/secondcar/renew');
			
			echo "success" ;
			Yii::app()->end();
			
		}
		echo "failed" ;	
	
	}
	

}
