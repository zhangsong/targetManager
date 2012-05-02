<?php

/**
 * This is the model class for table "items".
 *
 * The followings are the available columns in table 'items':
 * @property integer $id
 * @property string $name
 * @property integer $type
 * @property integer $ctime
 * @property string $remark
 * @property integer $fid
 */
class items extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return items the static model class
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
		return 'items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, type, ctime, fid', 'required'),
			array('type, ctime, fid', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>300),
			array('remark', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, type, ctime, remark, fid', 'safe', 'on'=>'search'),
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
			'name' => '条目名称',
			'type' => '类型',
			'ctime' => '创建时间',
			'remark' => '备注',
			'fid' => '所属关系',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type);
		//$criteria->compare('ctime',date('Y-m-d', $this->ctime));
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('fid',$this->fid);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
	
	public $level_data = array();
	
	//创建关系列表
	public function createRelList($fid = 0, $level = 0, $pSub='') {
		$level_result = $this->findAllByAttributes(array('fid'=>$fid));
		
		$cSub = $pSub . '|-';//当前 前缀
		foreach ($level_result as $result) {
			//has 结果集
			$res = $this->findAllByAttributes(array('fid'=>$result->id));
			//$result->name = $level . $result->name;
			$result->name = $cSub . $result->name;
			$this->level_data[$result->id] = $result->name;
			
			
			if (count($res)>0) {
				$nSub = '| ' . $pSub;
				$this->createRelList($result->id, ++$level, $nSub);
			} else {
				
			}
			
		}
		//$a = $this->findByPk(1);
		//var_dump(count($a));
	}
	
}