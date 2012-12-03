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
		$page 		= Yii::app()->request->getParam('page' , 1) ;
		$pagesize = Yii::app()->request->getParam('pagesize' , 1) ;
		// get records
		$criteria = new CDbCriteria(); 
		$criteria->addCondition("category={$data['category']}") ; 
		$criteria->addCondition("state=0" ,'AND') ;  
        $criteria->order = 'priority desc,ctime desc';
        $count 	= Info::model()->count($criteria); 
        $reclist = array() ;
        //var_dump($count) ;
        if($count>0){
        	$criteria->offset = ($page -1) * $pagesize ;
        	$criteria->limit = $pagesize ;
        	$reclist = Info::model()->findAll($criteria) ;
        }
        //get pagination
        $pager = new CPagination($count);
        $pager->pageSize	= $pagesize ;
        $pager->applyLimit($criteria) ;
        
        $data['pages'] = $pager ;
        $data['reclist'] = $reclist ;
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
	/**
	 * Add information
	 * Enter description here ...
	 */
	public function actionAddact(){
		$model = new Info() ;
		$request = Yii::app()->request ;
		$model->title		= $request->getParam('title') ;
		$model->category	= $request->getParam('category' , 1) ;
		$model->descript	= $request->getParam('descript') ;
		$model->content		= $request->getParam('content') ;
		$model->priority	= $request->getParam('priority') ;
		$model->ctime		= time() ;
		//Upload Images
		$pic_url = CUploadedFile::getInstanceByName('pic_url');
		$upload = "e:/localFile/".$pic_url->name ;
		$pic_url->saveAs($upload);
		$model->pic_url = $upload ;
		if($model->save()){
			echo "success" ;
			Yii::app()->end();
		}
		echo "failed" ;
	}
	
	/**
	 * Edit information action
	 */
	public function actionEditact(){
		$model = new Info() ;
		$assoc = array() ;
		$request = Yii::app()->request ;
		$rec_id		= $request->getParam('id');
		if(empty($rec_id)){
			//error
			$this->redirect('/index.php/admin/');
		}
		$assoc['title']		= $request->getParam('title') ;
		$assoc['category']	= $request->getParam('category' , 1) ;
		$assoc['descript']	= $request->getParam('descript') ;
		$assoc['content']	= $request->getParam('content') ;
		$assoc['priority']	= $request->getParam('priority') ;
		//Upload Images
		$pic_url = CUploadedFile::getInstanceByName('pic_url');
		if(!empty($pic_url->name)){
			$upload = "e:/localFile/".$pic_url->name ;
			$pic_url->saveAs($upload);
			$assoc['pic_url'] = $upload ;
		}
		$res = Info::model()->UpdateByPk($rec_id , $assoc);
		if($res){
			echo "success" ;
			Yii::app()->end();
			$this->redirect("/index.php/admin/") ;
		}
		echo "failed" ;	
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