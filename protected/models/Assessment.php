<?php

class Assessment extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'assessment';
	}

	public function rules()
	{
		return array(
			array('task_id, name, type, assessment_id', 'required'),
			array('assessment_id', 'numerical', 'integerOnly'=>true),
			array('task_id', 'length', 'max'=>10),
			array('name', 'length', 'max'=>255),
			array('type', 'length', 'max'=>8),
			array('id, task_id, name, type, assessment_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'task' => array(self::BELONGS_TO, 'Challenge', 'task_id'),
		);
	}

	public function behaviors()
	{
		return array(
			'CAdvancedArBehavior' => array(
				'class' => 'ext.CAdvancedArBehavior'
			)
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('app', 'ID'),
			'task_id' => Yii::t('app', 'Task'),
			'name' => Yii::t('app', 'Name'),
			'type' => Yii::t('app', 'Type'),
			'assessment_id' => Yii::t('app', 'Assessment'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);

		$criteria->compare('task_id',$this->task_id,true);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('type',$this->type,true);

		$criteria->compare('assessment_id',$this->assessment_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
