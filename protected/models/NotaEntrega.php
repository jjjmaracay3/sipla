<?php

/**
 * This is the model class for table "nota_entrega".
 *
 * The followings are the available columns in table 'nota_entrega':
 * @property integer $nu_nota
 * @property integer $nu_solicitud
 * @property integer $nu_funcionario
 * @property string $fe_fecha_nota
 * @property integer $nu_cantidad_entregada
 *
 * The followings are the available model relations:
 * @property Funcionario $nuFuncionario
 * @property Solicitud $nuSolicitud
 */
class NotaEntrega extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NotaEntrega the static model class
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
		return 'nota_entrega';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_solicitud, nu_funcionario, fe_fecha_nota, nu_cantidad_entregada', 'required'),
			array('nu_solicitud, nu_funcionario, nu_cantidad_entregada', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_nota, nu_solicitud, nu_funcionario, fe_fecha_nota, nu_cantidad_entregada', 'safe', 'on'=>'search'),
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
			'nuFuncionario' => array(self::BELONGS_TO, 'Funcionario', 'nu_funcionario'),
			'nuSolicitud' => array(self::BELONGS_TO, 'Solicitud', 'nu_solicitud'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_nota' => 'Nu Nota',
			'nu_solicitud' => 'Nu Solicitud',
			'nu_funcionario' => 'Nu Funcionario',
			'fe_fecha_nota' => 'Fe Fecha Nota',
			'nu_cantidad_entregada' => 'Nu Cantidad Entregada',
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

		$criteria->compare('nu_nota',$this->nu_nota);
		$criteria->compare('nu_solicitud',$this->nu_solicitud);
		$criteria->compare('nu_funcionario',$this->nu_funcionario);
		$criteria->compare('fe_fecha_nota',$this->fe_fecha_nota,true);
		$criteria->compare('nu_cantidad_entregada',$this->nu_cantidad_entregada);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}