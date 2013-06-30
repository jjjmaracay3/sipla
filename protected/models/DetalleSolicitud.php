<?php

/**
 * This is the model class for table "detalle_solicitud".
 *
 * The followings are the available columns in table 'detalle_solicitud':
 * @property integer $nu_detalle_solicitud
 * @property integer $nu_solicitud
 * @property integer $nu_articulo
 * @property integer $nu_cantidad_solicitada
 * @property string $al_justificacion
 *
 * The followings are the available model relations:
 * @property ArticuloTecnologico $nuArticulo
 * @property Solicitud $nuSolicitud
 */
class DetalleSolicitud extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DetalleSolicitud the static model class
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
		return 'detalle_solicitud';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_solicitud, nu_articulo, nu_cantidad_solicitada, al_justificacion', 'required'),
			array('nu_solicitud, nu_articulo, nu_cantidad_solicitada', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_detalle_solicitud, nu_solicitud, nu_articulo, nu_cantidad_solicitada, al_justificacion', 'safe', 'on'=>'search'),
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
			'articulo' => array(self::BELONGS_TO, 'ArticuloTecnologico', 'nu_articulo'),
			'nuSolicitud' => array(self::BELONGS_TO, 'Solicitud', 'nu_solicitud'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_detalle_solicitud' => 'Nu Detalle Solicitud',
			'nu_solicitud' => 'Nu Solicitud',
			'nu_articulo' => 'Nu Articulo',
			'nu_cantidad_solicitada' => 'Nu Cantidad Solicitada',
			'al_justificacion' => 'Al Justificacion',
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

		$criteria->compare('nu_detalle_solicitud',$this->nu_detalle_solicitud);
		$criteria->compare('nu_solicitud',$this->nu_solicitud);
		$criteria->compare('nu_articulo',$this->nu_articulo);
		$criteria->compare('nu_cantidad_solicitada',$this->nu_cantidad_solicitada);
		$criteria->compare('al_justificacion',$this->al_justificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}