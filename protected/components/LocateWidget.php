<?php
class LocateWidget extends CWidget 
{
	public function run(){
		$channellist = Yii::app()->params['channel'] ;
		$curcon = Yii::app()->controller->id ;
		$isindex = ($curcon == 'site') ? true : false ;
		$data['isindex'] = $isindex ;
		if(!$isindex){
			$data['conname'] = $channellist[$curcon]['title'] ;
			$curact = Yii::app()->controller->action->id ;
			$data['actname'] = $channellist[$curcon]['actions'][$curact] ;
		}
		$this->render('locate' ,$data) ;
	}
}