<?php
/**
 * 二手车信息model层
 * This is the model class for table "auto_secondhand_info".
 *
 * The followings are the available columns in table 'auto_secondhand_info':
 * @property integer $id
 * @property string $title
 * @property string $cate
 * @property string $motor
 * @property string $gearbox
 * @property string $outpub
 * @property string $color
 * @property integer $roadhaul
 * @property integer $plate_number_time
 * @property integer $price
 * @property integer $pubtime
 * @property string $pubcomp
 * @property integer $contract_tel
 * @property string $auto_info
 * @property string $pic_one
 * @property string $pic_two
 * @property string $pic_three
 * @property string $pic_four
 * @property integer $state
 * @property integer $is_best
 * @property integer $ctime
 */
class SecondhandInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SecondhandInfo the static model class
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
		return 'auto_secondhand_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('roadhaul, plate_number_time, price, pubtime, contract_tel, state, is_best, ctime', 'numerical', 'integerOnly'=>true),
			array('title, cate, motor, gearbox, outpub, color, pic_one, pic_two, pic_three, pic_four', 'length', 'max'=>120),
			array('pubcomp', 'length', 'max'=>50),
			array('auto_info', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, cate, motor, gearbox, outpub, color, roadhaul, plate_number_time, price, pubtime, pubcomp, contract_tel, auto_info, pic_one, pic_two, pic_three, pic_four, state, is_best, ctime', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'cate' => 'Cate',
			'motor' => 'Motor',
			'gearbox' => 'Gearbox',
			'outpub' => 'Outpub',
			'color' => 'Color',
			'roadhaul' => 'Roadhaul',
			'plate_number_time' => 'Plate Number Time',
			'price' => 'Price',
			'pubtime' => 'Pubtime',
			'pubcomp' => 'Pubcomp',
			'contract_tel' => 'Contract Tel',
			'auto_info' => 'Auto Info',
			'pic_one' => 'Pic One',
			'pic_two' => 'Pic Two',
			'pic_three' => 'Pic Three',
			'pic_four' => 'Pic Four',
			'state' => 'State',
			'is_best' => 'Is Best',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('cate',$this->cate,true);
		$criteria->compare('motor',$this->motor,true);
		$criteria->compare('gearbox',$this->gearbox,true);
		$criteria->compare('outpub',$this->outpub,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('roadhaul',$this->roadhaul);
		$criteria->compare('plate_number_time',$this->plate_number_time);
		$criteria->compare('price',$this->price);
		$criteria->compare('pubtime',$this->pubtime);
		$criteria->compare('pubcomp',$this->pubcomp,true);
		$criteria->compare('contract_tel',$this->contract_tel);
		$criteria->compare('auto_info',$this->auto_info,true);
		$criteria->compare('pic_one',$this->pic_one,true);
		$criteria->compare('pic_two',$this->pic_two,true);
		$criteria->compare('pic_three',$this->pic_three,true);
		$criteria->compare('pic_four',$this->pic_four,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('is_best',$this->is_best);
		$criteria->compare('ctime',$this->ctime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}