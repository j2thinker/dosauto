<?php
/**
 * 二手车信息
 * Enter description here ...
 * @author Administrator
 *
 */
class SecondInfoForm extends CFormModel{
	public $id;
	public $title;		//标题
	public $cate;		//车型/车系
	public $motor;		//发动机
	public $gearbox;	//变速箱
	public $outpub;		//排量
	public $color;		
	public $roadhaul;		
	public $plate_number_time;		
	public $price;		
	public $pubtime;		
	public $pubcomp;		
	public $contract_tel;		
	public $auto_info;		
	public $pic_one;		
	public $pic_two;		
	public $pic_three;		
	public $pic_four;		
	public $state;		//状态，文章是否过期等
	public $is_best;	//是否为精品
	public $limit = 10;//
	

	/**
	 * 新加二手车信息
	 */
	public function add(){
		$connection = Yii::app()->db;
		$sql = "replace into `auto_secondhand_info` set `id`=:id, `title`=:title, `cate`=:cate, `motor`=:motor, `gearbox`=:gearbox, `outpub`=:outpub, `color`=:color, `roadhaul`=:roadhaul, `plate_number_time`=:plate_number_time, `price`=:price, `pubtime`=:pubtime, `pubcomp`=:pubcomp, `contract_tel`=:contract_tel,`auto_info`=:auto_info, `pic_one`=:pic_one, `pic_two`=:pic_two, `pic_three`=:pic_three, `pic_four`=:pic_four, `state`=:state, `is_best`=:is_best, `ctime`=:ctime";
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":id"=>$this->id, ":title"=>$this->title, ":cate"=>$this->cate, ":motor"=>$this->motor, ":gearbox"=>$this->gearbox, ":outpub"=>$this->outpub, ":color"=>$this->color, ":roadhaul"=>$this->roadhaul, ":plate_number_time"=>$this->plate_number_time, ":price"=>$this->price, ":pubtime"=>$this->pubtime, ":pubcomp"=>$this->pubcomp, ":contract_tel"=>$this->contract_tel, ":auto_info"=>$this->auto_info, ":pic_one"=>$this->pic_one, ":pic_two"=>$this->pic_two, ":pic_three"=>$this->pic_three, ":pic_four"=>$this->pic_four, ":state"=>$this->state, ":is_best"=>$this->is_best, ":ctime"=>time()));
		$rowCount=$command->execute(); 
		return $rowCount;
	}
	

	public function delete(){
		$connection = Yii::app()->db;
		$sql = "delete from `auto_secondhand_info` where `id`=:id";
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":id"=>$this->id));
		$list = $command->execute(); 
		return $list;
	}
	
	public function get_lately_list(){
		$connection = Yii::app()->db;
		$sql = "select * from `auto_secondhand_info` order by `ctime` desc limit " . $this->limit;
		$command=$connection->createCommand($sql);
		$list = $command->queryAll(); 
		return $list;
	}
	
	public function get_list_by_id(){
		$connection = Yii::app()->db;
		$sql = "select * from `auto_secondhand_info` where `id`=:id";
		$command=$connection->createCommand($sql);
		$command->bindValues(array(":id"=>$this->id));
		$list = $command->queryRow(); 
		return $list;
	}
	
	public function get_best_list(){
		$connection = Yii::app()->db;
		$sql = "select * from `auto_secondhand_info` where `is_best` = 1 order by `ctime` desc limit " . $this->limit;
		$command=$connection->createCommand($sql);
		$list = $command->queryAll(); 
		return $list;
	
	}
	
	/*
	 * 二手车信息分页查询
	 */
	public function get_page_list(){
		$connection = Yii::app()->db;
		$sql = "select * from `auto_secondhand_info` limit $start,$page_limit order by `ctime`";
		$command=$connection->createCommand($sql);
		$list = $command->queryAll(); 
		return $list;
	}

} 
