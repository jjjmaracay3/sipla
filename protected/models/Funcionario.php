<?php

/**
 * This is the model class for table "funcionario".
 *
 * The followings are the available columns in table 'funcionario':
 * @property integer $nu_funcionario
 * @property integer $nu_rol
 * @property string $al_nombre_funcionario
 * @property string $al_cargo_funcionario
 * @property string $al_usuario_login
 * @property string $al_clave_login
 * @property string $al_apellido_funcionario
 * @property integer $nu_cedula_funcionario
 *
 * The followings are the available model relations:
 * @property Departamento[] $departamentos
 * @property RequisicionCompra[] $requisicionCompras
 * @property RolFuncionario $nuRol
 */
class Funcionario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Funcionario the static model class
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
		return 'funcionario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_rol, al_nombre_funcionario, al_cargo_funcionario, al_usuario_login, al_clave_login, al_apellido_funcionario, nu_cedula_funcionario', 'required'),
			array('nu_rol, nu_cedula_funcionario', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_funcionario, nu_rol, al_nombre_funcionario, al_cargo_funcionario, al_usuario_login, al_clave_login, al_apellido_funcionario, nu_cedula_funcionario', 'safe', 'on'=>'search'),
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
			'departamentos' => array(self::HAS_MANY, 'Departamento', 'nu_funcionario'),
			'requisicionCompras' => array(self::HAS_MANY, 'RequisicionCompra', 'nu_funcionario'),
			'nuRol' => array(self::BELONGS_TO, 'RolFuncionario', 'nu_rol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_funcionario' => 'Nu Funcionario',
			'nu_rol' => 'Rol',
			'al_nombre_funcionario' => 'Nombre de funcionario',
			'al_cargo_funcionario' => 'Cargo de funcionario',
			'al_usuario_login' => 'Usuario de login',
			'al_clave_login' => 'Clave de login',
			'al_apellido_funcionario' => 'Apellido de funcionario',
			'nu_cedula_funcionario' => 'Cedula funcionario',
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

		$criteria->compare('nu_funcionario',$this->nu_funcionario);
		$criteria->compare('nu_rol',$this->nu_rol);
		$criteria->compare('al_nombre_funcionario',$this->al_nombre_funcionario,true);
		$criteria->compare('al_cargo_funcionario',$this->al_cargo_funcionario,true);
		$criteria->compare('al_usuario_login',$this->al_usuario_login,true);
		$criteria->compare('al_clave_login',$this->al_clave_login,true);
		$criteria->compare('al_apellido_funcionario',$this->al_apellido_funcionario,true);
		$criteria->compare('nu_cedula_funcionario',$this->nu_cedula_funcionario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}