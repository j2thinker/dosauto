<?php

class JobsForm extends CFormModel{
	public $id;
	public $jobs_name;
	public $jobs_info;
	public $ctime;
	public $email;
	public $cat_id;
	public function save(){
		$connection = Yii::app()->db;
		$sql = "replace into `auto_jobs_info` set `id`=:id, `jobs_name`=:jobs_name, `jobs_info`=:jobs_info, `ctime`=:ctime, `email`=:email, `cat_id`=:cat_id";
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":id"=>$this->id, ":jobs_name"=>$this->jobs_name, ":jobs_info"=>$this->jobs_info, ":ctime"=>$this->ctime, ":email"=>$this->email, ":cat_id"=>$this->cat_id));
		$rowCount=$command->execute(); 
	}
	public function get_list(){
		$connection = Yii::app()->db;
		$sql = "select * from `auto_jobs_info`";
		$command=$connection->createCommand($sql);
		$list = $command->queryAll(); 
		return $list;
	}
	public function get_list_by_id(){
		$connection = Yii::app()->db;
		$sql = "select * from `auto_jobs_info` where `id`=:id";
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":id"=>$this->id));
		$list = $command->queryRow(); 
		return $list;
	}
	public function delete(){
		$connection = Yii::app()->db;
		$sql = "delete from `auto_jobs_info` where `id`=:id";
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":id"=>$this->id));
		$list = $command->execute(); 
		return $list;
	}
}