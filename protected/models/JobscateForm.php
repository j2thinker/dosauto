<?php

class JobscateForm extends CFormModel{
	public $id;
	public $cate_name;
	public $cate;
	public function save(){
		$connection = Yii::app()->db;
		$sql = "replace into `auto_jobs_cate` set `id`=:id, `cate_name`=:cate_name";
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":id"=>$this->id, ":cate_name"=>$this->cate_name));
		$rowCount=$command->execute(); 
	}
	public function get_list(){
		$connection = Yii::app()->db;
		$sql = "select * from `auto_jobs_cate`";
		$command=$connection->createCommand($sql);
		$list = $command->queryAll(); 
		return $list;
	}
	public function get_list_by_id(){
		$connection = Yii::app()->db;
		$sql = "select * from `auto_jobs_cate` where `id`=:id";
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":id"=>$this->id));
		$list = $command->queryRow(); 
		return $list;
	}
	public function delete(){
		$connection = Yii::app()->db;
		$sql = "delete from `auto_jobs_cate` where `id`=:id";
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":id"=>$this->id));
		$list = $command->execute(); 
		return $list;
	}
}