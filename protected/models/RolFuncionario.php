<?php

/**
 * This is the model class for table "rol_funcionario".
 *
 * The followings are the available columns in table 'rol_funcionario':
 * @property integer $nu_rol
 * @property string $al_nombre_rol
 * @property string $al_descipcion_rol
 *
 * The followings are the available model relations:
 * @property Seccion[] $seccions
 * @property Funcionario[] $funcionarios
 */
class RolFuncionario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RolFuncionario the static model class
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
		return 'rol_funcionario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('al_nombre_rol, al_descipcion_rol', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_rol, al_nombre_rol, al_descipcion_rol', 'safe', 'on'=>'search'),
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
			'seccions' => array(self::HAS_MANY, 'Seccion', 'nu_rol'),
			'funcionarios' => array(self::HAS_MANY, 'Funcionario', 'nu_rol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_rol' => 'Nu Rol',
			'al_nombre_rol' => 'Al Nombre Rol',
			'al_descipcion_rol' => 'Al Descipcion Rol',
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

		$criteria->compare('nu_rol',$this->nu_rol);
		$criteria->compare('al_nombre_rol',$this->al_nombre_rol,true);
		$criteria->compare('al_descipcion_rol',$this->al_descipcion_rol,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}