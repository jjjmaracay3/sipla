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
 * @property string $username
 * @property string $password
 * @property string $session
 *
 * The followings are the available model relations:
 * @property NotaEntrega[] $notaEntregas
 * @property Solicitud[] $solicituds
 * @property RequisicionCompra[] $requisicionCompras
 * @property Departamento $nuNumeroDepartamento
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
			array('nu_numero_departamento, nu_rol, al_nombre_funcionario, al_apellido_funcionario, nu_cedula_funcionario, al_cargo_funcionario, username, password', 'required'),
			array('nu_numero_departamento, nu_rol, nu_cedula_funcionario', 'numerical', 'integerOnly'=>true),
			array('al_correo_funcionario, session', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_funcionario, nu_numero_departamento, nu_rol, al_nombre_funcionario, al_apellido_funcionario, nu_cedula_funcionario, al_cargo_funcionario, al_correo_funcionario, username, password, session', 'safe', 'on'=>'search'),
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
			'notaEntregas' => array(self::HAS_MANY, 'NotaEntrega', 'nu_funcionario'),
			'solicituds' => array(self::HAS_MANY, 'Solicitud', 'nu_funcionario'),
			'requisicionCompras' => array(self::HAS_MANY, 'RequisicionCompra', 'nu_funcionario'),
			'nuNumeroDepartamento' => array(self::BELONGS_TO, 'Departamento', 'nu_numero_departamento'),
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
			'nu_numero_departamento' => 'Nu Numero Departamento',
			'nu_rol' => 'Nu Rol',
			'al_nombre_funcionario' => 'Al Nombre Funcionario',
			'al_apellido_funcionario' => 'Al Apellido Funcionario',
			'nu_cedula_funcionario' => 'Nu Cedula Funcionario',
			'al_cargo_funcionario' => 'Al Cargo Funcionario',
			'al_correo_funcionario' => 'Al Correo Funcionario',
			'username' => 'Username',
			'password' => 'Password',
			'session' => 'Session',
		);
	}

	public function validatePassword($password)
	{
		return $this->hashPassword($password,$this->session)==$this->password;
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @param string salt
	 * @return string hash
	 */
	public function hashPassword($password,$salt)
	{
		#return md5($salt.$password);
		return $password;
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('session',$this->session,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}