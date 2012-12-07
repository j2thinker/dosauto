<?php
class Title extends CActiveRecord
{
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
		return 'auto_title';
	}
	
	/**
	 * Db rules
	 * @see CModel::rules()
	 */
	public function rules(){
		return array(
				array('cat,title,source_id','required'),
			) ;
	}
}