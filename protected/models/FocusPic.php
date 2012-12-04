<?php
class FocusPic extends CActiveRecord{
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
		return 'focus_pic';
	}
	
	/**
	 * Db rules
	 * @see CModel::rules()
	 */
	public function rules(){
		return array(
				array('pic_src','required'),
			) ;
	}
	
}