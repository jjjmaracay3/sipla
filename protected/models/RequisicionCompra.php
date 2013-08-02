<?php

/**
 * This is the model class for table "requisicion_compra".
 *
 * The followings are the available columns in table 'requisicion_compra':
 * @property integer $nu_requisicion
 * @property integer $nu_plan_compra
 * @property integer $nu_funcionario
 * @property string $fe_fecha_requisicion
 *
 * The followings are the available model relations:
 * @property DetalleRequisicion $detalleRequisicion
 * @property Funcionario $nuFuncionario
 * @property PlanCompra $nuPlanCompra
 */
class RequisicionCompra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RequisicionCompra the static model class
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
		return 'requisicion_compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_plan_compra, nu_funcionario, fe_fecha_requisicion', 'required'),
			array('nu_plan_compra, nu_funcionario', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_requisicion, nu_plan_compra, nu_funcionario, fe_fecha_requisicion', 'safe', 'on'=>'search'),
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
			'detalleRequisicion' => array(self::HAS_ONE, 'DetalleRequisicion', 'nu_requisicion'),
			'nuFuncionario' => array(self::BELONGS_TO, 'Funcionario', 'nu_funcionario'),
			'nuPlanCompra' => array(self::BELONGS_TO, 'PlanCompra', 'nu_plan_compra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_requisicion' => 'Nu Requisicion',
			'nu_plan_compra' => 'Nu Plan Compra',
			'nu_funcionario' => 'Nu Funcionario',
			'fe_fecha_requisicion' => 'Fe Fecha Requisicion',
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

		$criteria->compare('nu_requisicion',$this->nu_requisicion);
		$criteria->compare('nu_plan_compra',$this->nu_plan_compra);
		$criteria->compare('nu_funcionario',$this->nu_funcionario);
		$criteria->compare('fe_fecha_requisicion',$this->fe_fecha_requisicion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}