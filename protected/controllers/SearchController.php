<?php
# curl  -H "HOST:hj3.weibo.com" "http://10.210.226.207/index.php/search/index?search_data=1"
class SearchController extends Controller{
	public function actionIndex(){
		$data = array();
		$search_data = Yii::app()->request->getParam("search_data", "");
		$page 		= Yii::app()->request->getParam('page' , 1) ;
		$pagesize = Yii::app()->request->getParam('pagesize' , 10) ;
		
		$data['search_data'] = $search_data;
		#查询news
		$criteria = new CDbCriteria();
		$criteria->addCondition("title LIKE '%".$search_data."%'") ;
		$count = Title::model()->count($criteria);
		$reclist = array() ;
		if($count>0){
			$criteria->offset = ($page -1) * $pagesize ;
			$criteria->limit = $pagesize ;
			$reclist = Title::model()->findAll($criteria) ;
		}
		if ($reclist){
			#取第一条渲染
			$first_new = $reclist[0];
			$criteria = new CDbCriteria();
			$criteria->addCondition("id = ".$first_new['source_id']) ;
			if ($first_new['cat'] == '0'){
				$info = Info::model()->find($criteria);
			}else{
				$info = IntroduceForm::model()->find($criteria);
			}
		}
		//get pagination
		$pager = new CPagination($count);
		$pager->pageSize	= $pagesize ;
		$pager->applyLimit($criteria) ;
		
        $data['pages'] = $pager ;
        $data['reclist'] = $reclist ;
        $data['info'] = $info ;
		$this->render('index', $data);
	}
}