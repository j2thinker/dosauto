<?php
class FocusPagePic extends CActiveRecord{
	public $id;
	public $page_id;
	public $pid_list;
	/**
	 * Returns the static model of the specified AR class.
	 * @return AdminNotice the static model class
	 */
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	/**
	 * return the model tablename
	 * @see CActiveRecord::tableName()
	 */
	public function tableName(){
		return 'page_focus_pic';
	}
	
	/**
	 * Db rules
	 * @see CModel::rules()
	 */
	public function rules(){
		return array(
				array('page_id,pid_list','required'),
			) ;
	}
	
}