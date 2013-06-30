<?php

/**
 * This is the model class for table "solicitud".
 *
 * The followings are the available columns in table 'solicitud':
 * @property integer $nu_solicitud
 * @property integer $nu_funcionario
 * @property integer $nu_numero_departamento
 * @property string $al_estado_solicitud
 * @property string $fe_solicitud
 *
 * The followings are the available model relations:
 * @property NotaEntrega[] $notaEntregas
 * @property Departamento $nuNumeroDepartamento
 * @property Funcionario $nuFuncionario
 * @property DetalleSolicitud[] $detalleSolicituds
 */
class Solicitud extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Solicitud the static model class
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
		return 'solicitud';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_funcionario, nu_numero_departamento, al_estado_solicitud, fe_solicitud', 'required'),
			array('nu_funcionario, nu_numero_departamento', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_solicitud, nu_funcionario, nu_numero_departamento, al_estado_solicitud, fe_solicitud', 'safe', 'on'=>'search'),
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
			'notaEntregas' => array(self::HAS_MANY, 'NotaEntrega', 'nu_solicitud'),
			'departamento' => array(self::BELONGS_TO, 'Departamento', 'nu_numero_departamento'),
			'funcionario' => array(self::BELONGS_TO, 'Funcionario', 'nu_funcionario'),
			'detalleSolicituds' => array(self::HAS_MANY, 'DetalleSolicitud', 'nu_solicitud'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_solicitud' => 'Nu Solicitud',
			'nu_funcionario' => 'Nu Funcionario',
			'nu_numero_departamento' => 'Nu Numero Departamento',
			'al_estado_solicitud' => 'Al Estado Solicitud',
			'fe_solicitud' => 'Fe Solicitud',
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

		$criteria->compare('nu_solicitud',$this->nu_solicitud);
		$criteria->compare('nu_funcionario',$this->nu_funcionario);
		$criteria->compare('nu_numero_departamento',$this->nu_numero_departamento);
		$criteria->compare('al_estado_solicitud',$this->al_estado_solicitud,true);
		$criteria->compare('fe_solicitud',$this->fe_solicitud,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}