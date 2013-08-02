<?php

/**
 * This is the model class for table "plan_compra".
 *
 * The followings are the available columns in table 'plan_compra':
 * @property integer $nu_plan_compra
 * @property integer $nu_articulo
 * @property string $fe_fecha_plan
 * @property integer $nu_cantidad_articulo
 * @property integer $nu_cantidad_pendiente
 *
 * The followings are the available model relations:
 * @property RequisicionCompra[] $requisicionCompras
 * @property ArticuloTecnologico $nuArticulo
 */
class PlanCompra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PlanCompra the static model class
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
		return 'plan_compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_articulo, fe_fecha_plan, nu_cantidad_articulo, nu_cantidad_pendiente', 'required'),
			array('nu_articulo, nu_cantidad_articulo, nu_cantidad_pendiente', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_plan_compra, nu_articulo, fe_fecha_plan, nu_cantidad_articulo, nu_cantidad_pendiente', 'safe', 'on'=>'search'),
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
			'requisicionCompras' => array(self::HAS_MANY, 'RequisicionCompra', 'nu_plan_compra'),
			'nuArticulo' => array(self::BELONGS_TO, 'ArticuloTecnologico', 'nu_articulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_plan_compra' => 'Nu Plan Compra',
			'nu_articulo' => 'Nu Articulo',
			'fe_fecha_plan' => 'Fe Fecha Plan',
			'nu_cantidad_articulo' => 'Nu Cantidad Articulo',
			'nu_cantidad_pendiente' => 'Nu Cantidad Pendiente',
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

		$criteria->compare('nu_plan_compra',$this->nu_plan_compra);
		$criteria->compare('nu_articulo',$this->nu_articulo);
		$criteria->compare('fe_fecha_plan',$this->fe_fecha_plan,true);
		$criteria->compare('nu_cantidad_articulo',$this->nu_cantidad_articulo);
		$criteria->compare('nu_cantidad_pendiente',$this->nu_cantidad_pendiente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}