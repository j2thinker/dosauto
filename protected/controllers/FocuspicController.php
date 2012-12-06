<?php
class FocuspicController extends Controller{
	public $layout = "adright" ;
	public function actionPiclist(){
		$reclist = FocusPic::model()->findAll();
		$data['list'] = $reclist;
		$this->render('piclist', $data) ;
	}
	public function actionPicAdd(){
		$data = array();
		$this->render('picadd', $data) ;
	}
	public function actionPicUpload(){
		$model = new FocusPic() ;
		$request = Yii::app()->request ;
		$model->pic_link = $request->getParam('pic_link', "") ;
		//Upload Images
		$pic_url = CUploadedFile::getInstanceByName('pic_src');
		$dir = dirname(dirname(dirname(__FILE__)));
		$pic_path = "/kindeditor/attached/".$pic_url->name ;
		# hj3.weibo.com/kindeditor/attached/123.jpg
		$upload = $dir.$pic_path;
		$pic_url->saveAs($upload);
		$model->pic_src = $pic_path ;
		if($model->save()){
			#Yii::app()->end();
		}
		$this->actionPiclist();
	}
	public function actionDelete(){
		$request = Yii::app()->request;
		$id = $request->getParam('pid', NULL);
		FocusPic::model()->findbyPk($id)->delete();
		$this->actionPiclist() ;
	}
	public function actionFocus(){
		$data = array();
		$list = FocusPagePic::model()->findAll();
		$data['list'] = $list;
		$this->render("focus", $data) ;
	}
	public function actionFocusAdd(){
		$request = Yii::app()->request;
		$data['id'] = $request->getParam("id", NULL);
		$reclist = array();
		if($data['id']){
			#$model = new FocusPagePic();
			#$model->id = $data['id'];
			$criteria = new CDbCriteria(); 
			$criteria->addCondition("id={$data['id']}") ; 
			#$info = $model->find($criteria);
			
			$reclist = FocusPagePic::model()->find($criteria) ;
		}
		$data['reclist'] = $reclist;
		$data['channel_id'] = 0;
		$data['channel'] = Yii::app()->params['channel'];
		$this->render("focusadd", $data) ;
	}
	
	public function actionFocusSave(){
		$model = new FocusPagePic() ;
		$request = Yii::app()->request;
		$model->id = $request->getPost('id', NULL);
		$model->page_id = $request->getPost('page_id', 1);
		$model->pid_list = $request->getPost('pid_list', "");

		$save = $model->save();
		$this->actionFocus() ;
	}
	public function actionFocusDel(){
		$request = Yii::app()->request;
		$id = $request->getParam('id', NULL);
		FocusPagePic::model()->findbyPk($id)->delete();
		$this->actionFocus() ;
	}
	
}