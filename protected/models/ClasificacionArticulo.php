<?php

/**
 * This is the model class for table "clasificacion_articulo".
 *
 * The followings are the available columns in table 'clasificacion_articulo':
 * @property integer $nu_clasificacion_articulo
 * @property string $al_nombre_clasificacion
 * @property string $al_descripcion_clasificacion
 *
 * The followings are the available model relations:
 * @property TipoArticulo[] $tipoArticulos
 */
class ClasificacionArticulo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ClasificacionArticulo the static model class
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
		return 'clasificacion_articulo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('al_nombre_clasificacion', 'required'),
			array('al_descripcion_clasificacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_clasificacion_articulo, al_nombre_clasificacion, al_descripcion_clasificacion', 'safe', 'on'=>'search'),
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
			'tipoArticulos' => array(self::HAS_MANY, 'TipoArticulo', 'nu_clasificacion_articulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_clasificacion_articulo' => 'Numero Clasificacion Articulo',
			'al_nombre_clasificacion' => 'Nombre Clasificacion',
			'al_descripcion_clasificacion' => 'Descripcion Clasificacion',
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

		$criteria->compare('nu_clasificacion_articulo',$this->nu_clasificacion_articulo);
		$criteria->compare('al_nombre_clasificacion',$this->al_nombre_clasificacion,true);
		$criteria->compare('al_descripcion_clasificacion',$this->al_descripcion_clasificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}