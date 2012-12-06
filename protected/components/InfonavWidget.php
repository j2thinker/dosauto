<?php 
class InfonavWidget extends CWidget {
	public function run(){
		$data = array() ;
		$controller = Yii::app()->controller->id ;
		
		#焦点图
		$ding_img_urls = array();
		if (isset(Yii::app()->controller->page_id)){
			$criteria = new CDbCriteria();
			$page_id = Yii::app()->controller->page_id;
			$criteria->addCondition("page_id={$page_id}") ;
			$re = FocusPagePic::model()->find($criteria);
			if ($re['pid_list']){
				$criteria = new CDbCriteria();
				$criteria->addCondition("pid IN ( {$re['pid_list']} )") ;
				$criteria->limit = 10 ;
				$page_url = FocusPic::model()->findAll($criteria);
				foreach ($page_url as $v){
					$ding_img_urls[] = $v['pic_src'];
				}
			}
		}
		if (count($ding_img_urls) == 0){
			//$ding_img_urls[] = "/images/gs_ding_tu.jpg";
		}
		$data['ding_img_urls'] = $ding_img_urls;
		$data['navinfo']	= Yii::app()->params['channel'][$controller] ;
		$data['action']		= Yii::app()->controller->action->id ;
		$data['controller'] = $controller ;
		$this->render('infonav' ,$data);
	}
}