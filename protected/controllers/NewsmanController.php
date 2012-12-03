<?php
/**
 * News and Activity management
 * @author zzlove
 */
class NewsmanController extends Controller{
	public $layout = "adright" ;
	public function actionIndex(){
		
	}
	/**
	 * Information List
	 */
	public function actionActivity() {
		$data = $this->getTempVars() ;
		$this->render('activity' , $data) ;
	}
	/**
	 * Add information 
	 */
	public function actionAddinfo(){
		$data = $this->getTempVars('other') ;
		$this->render('addinfo' , $data) ;
	}
	
	/**
	 * Edit information 
	 */
	public function actionEditinfo(){
		$info_id = Yii::app()->request->getParam('id') ;
		$info_obj = new Info();
		$data['infodetail'] = $info_obj->findByPk($info_id) ;
		$this->render('infoedit' , $data) ;
	}
	
	public function actionAddact(){
		
	}
	
	public function actionEditact(){
		
	}
	/**
	 * list information reference to Activity action
	 * Enter description here ...
	 */
	public function actionForsale() {
		$this->actionActivity();
	}
	
	public function actionCompnews(){
		$this->actionActivity();
	}
	
	public function actionBusinews(){
		$this->actionActivity();
	}
	
	public function actionService(){
		$this->actionActivity();
	}
	
	public function actionClassroom(){
		$this->actionActivity();
	}
	
	/**
	 * get template vars by params from url
	 */
	private function getTempVars($page="list"){
		$tpvar = array();
		$cate_id = Yii::app()->request->getParam('cid');
		$tpvar['category'] = $cate_id ;
		$allcates= Yii::app()->params['cateinfo'] ;
		if(isset($allcates[$cate_id])){
			$cname = $allcates[$cate_id] ;
			$tpvar['cname'] = $cname ;
		}
		if($page === 'list'){
		//get info list from db
		//$tpvar['infolist'] = "" ;
		}
		return $tpvar ;
	}
}