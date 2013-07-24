<?php

/**
 * This is the model class for table "tipo_articulo".
 *
 * The followings are the available columns in table 'tipo_articulo':
 * @property integer $nu_tipo_articulo
 * @property integer $nu_clasificacion_articulo
 * @property string $al_nombre_tipo
 * @property string $al_descripcion_tipo
 *
 * The followings are the available model relations:
 * @property ClasificacionArticulo $nuClasificacionArticulo
 * @property DetalleSolicitud[] $detalleSolicituds
 * @property ArticuloTecnologico[] $articuloTecnologicos
 */
class TipoArticulo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TipoArticulo the static model class
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
		return 'tipo_articulo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_clasificacion_articulo, al_nombre_tipo, al_descripcion_tipo', 'required'),
			array('nu_clasificacion_articulo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_tipo_articulo, nu_clasificacion_articulo, al_nombre_tipo, al_descripcion_tipo', 'safe', 'on'=>'search'),
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
			'clasificacion' => array(self::BELONGS_TO, 'ClasificacionArticulo', 'nu_clasificacion_articulo'),
			'detalleSolicituds' => array(self::HAS_MANY, 'DetalleSolicitud', 'nu_tipo_articulo'),
			'articuloTecnologicos' => array(self::HAS_MANY, 'ArticuloTecnologico', 'nu_tipo_articulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_tipo_articulo' => 'Nu Tipo Articulo',
			'nu_clasificacion_articulo' => 'Nu Clasificacion Articulo',
			'al_nombre_tipo' => 'Al Nombre Tipo',
			'al_descripcion_tipo' => 'Al Descripcion Tipo',
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

		$criteria->compare('nu_tipo_articulo',$this->nu_tipo_articulo);
		$criteria->compare('nu_clasificacion_articulo',$this->nu_clasificacion_articulo);
		$criteria->compare('al_nombre_tipo',$this->al_nombre_tipo,true);
		$criteria->compare('al_descripcion_tipo',$this->al_descripcion_tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}