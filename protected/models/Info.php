<?php
class Info extends CActiveRecord
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
		return 'auto_info';
	}
	
	/**
	 * Db rules
	 * @see CModel::rules()
	 */
	public function rules(){
		return array(
				array('title,content,category,pic_url','required'),
				array('title','length','max'=>120),
				//array('pic_url', 'file', 'types'=>'jpg, gif, png')
			) ;
	}
}