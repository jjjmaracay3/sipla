<?php

/**
 * This is the model class for table "seccion".
 *
 * The followings are the available columns in table 'seccion':
 * @property integer $nu_seccion
 * @property string $al_nombre_seccion
 * @property string $al_descripcion_modulo
 *
 * The followings are the available model relations:
 * @property Modulo[] $modulos
 */
class Seccion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Seccion the static model class
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
		return 'seccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('al_nombre_seccion', 'required'),
			array('al_descripcion_modulo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_seccion, al_nombre_seccion, al_descripcion_modulo', 'safe', 'on'=>'search'),
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
			'modulos' => array(self::HAS_MANY, 'Modulo', 'nu_seccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_seccion' => 'Nu Seccion',
			'al_nombre_seccion' => 'Al Nombre Seccion',
			'al_descripcion_modulo' => 'Al Descripcion Modulo',
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

		$criteria->compare('nu_seccion',$this->nu_seccion);
		$criteria->compare('al_nombre_seccion',$this->al_nombre_seccion,true);
		$criteria->compare('al_descripcion_modulo',$this->al_descripcion_modulo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}