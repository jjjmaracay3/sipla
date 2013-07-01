<?php

/**
 * This is the model class for table "departamento".
 *
 * The followings are the available columns in table 'departamento':
 * @property integer $nu_numero_departamento
 * @property string $al_nombre_departamento
 * @property integer $nu_tlf_departamento
 *
 * The followings are the available model relations:
 * @property Solicitud[] $solicituds
 * @property Funcionario[] $funcionarios
 */
class Departamento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Departamento the static model class
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
		return 'departamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('al_nombre_departamento', 'required'),
			array('nu_tlf_departamento', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_numero_departamento, al_nombre_departamento, nu_tlf_departamento', 'safe', 'on'=>'search'),
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
			'solicituds' => array(self::HAS_MANY, 'Solicitud', 'nu_numero_departamento'),
			'funcionarios' => array(self::HAS_MANY, 'Funcionario', 'nu_numero_departamento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_numero_departamento' => 'Nu Numero Departamento',
			'al_nombre_departamento' => 'Al Nombre Departamento',
			'nu_tlf_departamento' => 'Nu Tlf Departamento',
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

		$criteria->compare('nu_numero_departamento',$this->nu_numero_departamento);
		$criteria->compare('al_nombre_departamento',$this->al_nombre_departamento,true);
		$criteria->compare('nu_tlf_departamento',$this->nu_tlf_departamento);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}