<?php

/**
 * This is the model class for table "leader".
 *
 * The followings are the available columns in table 'leader':
 * @property integer $idleader
 * @property string $name
 * @property string $age
 * @property string $gender
 * @property string $course
 * @property string $vyingpost
 * @property string $tagline
 */
class Leader extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'leader';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idleader, name, age, gender, course, vyingpost, tagline', 'required'),
			array('idleader', 'numerical', 'integerOnly'=>true),
			array('name, age, gender, course, vyingpost, tagline', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idleader, name, age, gender, course, vyingpost, tagline', 'safe', 'on'=>'search'),
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
			'idleader' => 'Idleader',
			'name' => 'Name',
			'age' => 'Age',
			'gender' => 'Gender',
			'course' => 'Course',
			'vyingpost' => 'Vyingpost',
			'tagline' => 'Tagline',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idleader',$this->idleader);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('age',$this->age,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('course',$this->course,true);
		$criteria->compare('vyingpost',$this->vyingpost,true);
		$criteria->compare('tagline',$this->tagline,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Leader the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
