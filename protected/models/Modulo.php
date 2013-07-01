<?php

/**
 * This is the model class for table "modulo".
 *
 * The followings are the available columns in table 'modulo':
 * @property integer $nu_modulo
 * @property integer $nu_seccion
 * @property string $al_nombre_modulo
 * @property string $al_descripcion_modulo
 *
 * The followings are the available model relations:
 * @property Seccion $nuSeccion
 * @property RolModulo[] $rolModulos
 */
class Modulo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Modulo the static model class
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
		return 'modulo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_seccion, al_nombre_modulo', 'required'),
			array('nu_seccion', 'numerical', 'integerOnly'=>true),
			array('al_descripcion_modulo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_modulo, nu_seccion, al_nombre_modulo, al_descripcion_modulo', 'safe', 'on'=>'search'),
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
			'nuSeccion' => array(self::BELONGS_TO, 'Seccion', 'nu_seccion'),
			'rolModulos' => array(self::HAS_MANY, 'RolModulo', 'nu_modulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_modulo' => 'Nu Modulo',
			'nu_seccion' => 'Nu Seccion',
			'al_nombre_modulo' => 'Al Nombre Modulo',
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

		$criteria->compare('nu_modulo',$this->nu_modulo);
		$criteria->compare('nu_seccion',$this->nu_seccion);
		$criteria->compare('al_nombre_modulo',$this->al_nombre_modulo,true);
		$criteria->compare('al_descripcion_modulo',$this->al_descripcion_modulo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}