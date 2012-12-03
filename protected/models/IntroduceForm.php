<?php

class IntroduceForm extends CFormModel{
	public $id;
	public $title;
	public $content;
	public $ctime;
	public $state;
	public $intro_type = 1;
	public $limit = 1;
	public function save(){
		$connection = Yii::app()->db;
		$sql = "replace into `auto_introduce` set `id`=:id, `title`=:title, `content`=:content, `ctime`=:ctime, `state`=:state, `intro_type`=:intro_type";
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":id"=>$this->id, ":title"=>$this->title, ":content"=>$this->content, ":ctime"=>$this->ctime, ":state"=>$this->state, ":intro_type"=>$this->intro_type));
		$rowCount=$command->execute(); 
	}
	public function get_list(){
		$connection = Yii::app()->db;
		$sql = "select * from `auto_introduce` where `intro_type`=:intro_type and `state`=:state order by `ctime` desc limit ". $this->limit;
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":state"=>$this->state, ":intro_type"=>$this->intro_type));
		$list = $command->queryAll(); 
		return $list;
	}
	public function get_list_by_id(){
		$connection = Yii::app()->db;
		$sql = "select * from `auto_introduce` where `id`=:id";
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":id"=>$this->id));
		$list = $command->queryRow(); 
		
		return $list;
	}
	public function delete(){
		$connection = Yii::app()->db;
		$sql = "delete from `auto_introduce` where `id`=:id";
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":id"=>$this->id));
		$list = $command->execute();
		return $list;
	}
}