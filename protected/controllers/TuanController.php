<?php
/**
 * group buy 
 * Enter description here ...
 * @author zzlove
 *
 */
class TuanController extends Controller
{
	public $layout = "adright" ;
	
	public function actionAdd(){
		$this->render('add') ;
	}
	
	/**
	 * 团购后台管理列表
	 * Enter description here ...
	 */
	public function actionAdminList(){
		$page 		= Yii::app()->request->getParam('page' , 1) ;
		$pagesize	= Yii::app()->request->getParam('pagesize' , 1) ;
		// get records
		$criteria = new CDbCriteria(); 
        $criteria->order = 'priority desc,ctime desc';
        $count 	= Tuan::model()->count($criteria); 
        $reclist = array() ;
        if($count>0){
        	$criteria->offset = ($page -1) * $pagesize ;
        	$criteria->limit = $pagesize ;
        	$reclist = Tuan::model()->findAll($criteria) ;
        }
        //get pagination
        $pager = new CPagination($count);
        $pager->pageSize	= $pagesize ;
        $pager->applyLimit($criteria) ;
        
        $data['pages'] = $pager ;
        $data['reclist'] = $reclist ;
		$this->render('adminlist' , $data) ;
	}
	
	/**
	 * Add Group buy form action
	 * Enter description here ...
	 */
	public function actionAddact(){
		$model = new Tuan() ;
		$linkto = Yii::app()->request->getParam('tuan_url') ;
		$priority = Yii::app()->request->getParam('priority') ;
		$pic_url = CUploadedFile::getInstanceByName('pic_url');
		$newname = substr($pic_url->name, 0 ,15) . "jpg" ;
		$upload = dirname(dirname(dirname(__FILE__)))."/kindeditor/attached/".$newname ;
		$pic_url->saveAs($upload);
		$model->link	= $linkto ;
		$model->pic_url = Yii::app()->request->baseUrl."/kindeditor/attached/".$newname;
		$model->priority = $priority ;
		$model->ctime = time() ;
		if($model->save()){
			echo "success" ;
			Yii::app()->end();
		}else{
			echo "Error" ;
		}
	}
	
	/**
	 * Delete Action 
	 */
	public function actionDel(){
		$tid = Yii::app()->request->getParam('tid') ;
		$tinfo = Tuan::model()->findByPk($tid) ;
		if(!empty($tinfo)){
			//delete the record
			$res = Tuan::model()->deleteByPk($tid) ;
			if($res){
				echo "success" ;
			}else{
				echo "failed" ;
			}
		}
		Yii::app()->end() ;
	}
	
	public function actionEdit(){
		$tid = Yii::app()->request->getParam('tid') ;
		$tinfo = Tuan::model()->findByPk($tid) ;
		$this->render('tuanedit' , array('tinfo' => $tinfo)) ;
	}
	
	public function actionEditact(){
		$tid = Yii::app()->request->getParam('tid') ;
		$request = Yii::app()->request ;
		$rec_id		= $request->getParam('id');
		if(empty($rec_id)){
			//error
			$this->redirect('/index.php/admin/');
		}
		$assoc['link']		= $request->getParam('tuan_url') ;
		$assoc['status']	= $request->getParam('status') ;
		$assoc['priority']	= $request->getParam('priority') ;
		//Upload Images
		$pic_url = CUploadedFile::getInstanceByName('pic_url');
		if(!empty($pic_url->name)){
			$upload = "/kindeditor/attached/".$pic_url->name ;
			$pic_url->saveAs($upload);
			$assoc['pic_url'] = Yii::app()->request->baseUrl . $upload ;
		}
		$res = Tuan::model()->UpdateByPk($rec_id , $assoc);
		if($res){
			echo "success" ;
			Yii::app()->end();
			$this->redirect("/index.php/admin/") ;
		}
		echo "failed" ;	
	}
}