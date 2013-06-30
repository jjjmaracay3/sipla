<?php

/**
 * This is the model class for table "funcionario".
 *
 * The followings are the available columns in table 'funcionario':
 * @property integer $nu_funcionario
 * @property integer $nu_numero_departamento
 * @property integer $nu_rol
 * @property string $al_nombre_funcionario
 * @property string $al_apellido_funcionario
 * @property integer $nu_cedula_funcionario
 * @property string $al_cargo_funcionario
 * @property string $al_correo_funcionario
 * @property string $al_usuario_login
 * @property string $al_clave_login
 *
 * The followings are the available model relations:
 * @property NotaEntrega[] $notaEntregas
 * @property Solicitud[] $solicituds
 * @property Departamento $nuNumeroDepartamento
 * @property RolFuncionario $nuRol
 * @property RequisicionCompra[] $requisicionCompras
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
			array('nu_numero_departamento, nu_rol, al_nombre_funcionario, al_apellido_funcionario, al_usuario_login, al_clave_login', 'required'),
			array('nu_numero_departamento, nu_rol, nu_cedula_funcionario', 'numerical', 'integerOnly'=>true),
			array('al_cargo_funcionario, al_correo_funcionario', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_funcionario, nu_numero_departamento, nu_rol, al_nombre_funcionario, al_apellido_funcionario, nu_cedula_funcionario, al_cargo_funcionario, al_correo_funcionario, al_usuario_login, al_clave_login', 'safe', 'on'=>'search'),
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
			//'departamento'=>array(self::BELONGS_TO,'Departamento','nu_numero_departamento')
			'notaEntregas' => array(self::HAS_MANY, 'NotaEntrega', 'nu_funcionario'),
			'solicituds' => array(self::HAS_MANY, 'Solicitud', 'nu_funcionario'),
			'departamento' => array(self::BELONGS_TO, 'Departamento', 'nu_numero_departamento'),
			'rol' => array(self::BELONGS_TO, 'RolFuncionario', 'nu_rol'),
			'requisicionCompras' => array(self::HAS_MANY, 'RequisicionCompra', 'nu_funcionario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_funcionario' => 'Numero Funcionario',
			'nu_numero_departamento' => 'Departamento',
			'nu_rol' => 'Rol',
			'al_nombre_funcionario' => 'Nombre Funcionario',
			'al_apellido_funcionario' => 'Apellido Funcionario',
			'nu_cedula_funcionario' => 'Cedula Funcionario',
			'al_cargo_funcionario' => 'Cargo Funcionario',
			'al_correo_funcionario' => 'Correo Funcionario',
			'al_usuario_login' => 'Usuario Login',
			'al_clave_login' => 'Clave Login',
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
		$criteria->compare('nu_numero_departamento',$this->nu_numero_departamento);
		$criteria->compare('nu_rol',$this->nu_rol);
		$criteria->compare('al_nombre_funcionario',$this->al_nombre_funcionario,true);
		$criteria->compare('al_apellido_funcionario',$this->al_apellido_funcionario,true);
		$criteria->compare('nu_cedula_funcionario',$this->nu_cedula_funcionario);
		$criteria->compare('al_cargo_funcionario',$this->al_cargo_funcionario,true);
		$criteria->compare('al_correo_funcionario',$this->al_correo_funcionario,true);
		$criteria->compare('al_usuario_login',$this->al_usuario_login,true);
		$criteria->compare('al_clave_login',$this->al_clave_login,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}