<?php

/**
 * 二手车置换模型层
 * This is the model class for table "auto_secondhand_change".
 *
 * The followings are the available columns in table 'auto_secondhand_change':
 * @property integer $id
 * @property string $cat
 * @property string $motor_output
 * @property string $gearbox
 * @property integer $roadhaul
 * @property string $motor_cate
 * @property string $color
 * @property string $ask_shop_name
 * @property integer $plate_number_time
 * @property string $old_info
 * @property string $new_info
 * @property string $name
 * @property integer $sex
 * @property integer $tel
 * @property string $contact_addr
 * @property string $email
 * @property integer $ctime
 */
class AutoSecondhandChange extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AutoSecondhandChange the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auto_secondhand_change';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('roadhaul, plate_number_time, sex, tel, ctime', 'numerical', 'integerOnly'=>true),
			array('cat, motor_output, gearbox, motor_cate, color, ask_shop_name, name, contact_addr', 'length', 'max'=>120),
			array('email', 'length', 'max'=>30),
			array('old_info, new_info', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cat, motor_output, gearbox, roadhaul, motor_cate, color, ask_shop_name, plate_number_time, old_info, new_info, name, sex, tel, contact_addr, email, ctime', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cat' => 'Cat',
			'motor_output' => 'Motor Output',
			'gearbox' => 'Gearbox',
			'roadhaul' => 'Roadhaul',
			'motor_cate' => 'Motor Cate',
			'color' => 'Color',
			'ask_shop_name' => 'Ask Shop Name',
			'plate_number_time' => 'Plate Number Time',
			'old_info' => 'Old Info',
			'new_info' => 'New Info',
			'name' => 'Name',
			'sex' => 'Sex',
			'tel' => 'Tel',
			'contact_addr' => 'Contact Addr',
			'email' => 'Email',
			'ctime' => 'Ctime',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cat',$this->cat,true);
		$criteria->compare('motor_output',$this->motor_output,true);
		$criteria->compare('gearbox',$this->gearbox,true);
		$criteria->compare('roadhaul',$this->roadhaul);
		$criteria->compare('motor_cate',$this->motor_cate,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('ask_shop_name',$this->ask_shop_name,true);
		$criteria->compare('plate_number_time',$this->plate_number_time);
		$criteria->compare('old_info',$this->old_info,true);
		$criteria->compare('new_info',$this->new_info,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('tel',$this->tel);
		$criteria->compare('contact_addr',$this->contact_addr,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('ctime',$this->ctime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}