<?php
class FocuspicController extends Controller{
	public $layout = "adright" ;
	public function actionPiclist(){
		$reclist = FocusPic::model()->findAll() ;
		$data['list'] = array();
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
		$pic_url = "/kindeditor/attached/".$pic_url->name ;
		$upload = $dir.$pic_url;
		$pic_url->saveAs($upload);
		$model->pic_src = $pic_url ;
		if($model->save()){
			Yii::app()->end();
		}
		$this->actionPiclist();
	}
	public function actionPicDelete(){
		
	}
	public function actionFocus(){
		$this->render("rightnav") ;
		echo 123;
	}
	public function actionFocusDelete(){
		$this->render("rightnav") ;
		echo 123;
	}
}