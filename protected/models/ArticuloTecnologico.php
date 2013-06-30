<?php

/**
 * This is the model class for table "articulo_tecnologico".
 *
 * The followings are the available columns in table 'articulo_tecnologico':
 * @property integer $nu_articulo
 * @property integer $nu_tipo_articulo
 * @property string $al_nombre_articulo
 * @property string $al_marca_articulo
 * @property string $al_modelo_articulo
 * @property string $al_descripcion_articulo
 * @property string $de_precio_unitario
 * @property string $al_color_articulo
 * @property string $al_unidad_medida
 *
 * The followings are the available model relations:
 * @property DetalleSolicitud[] $detalleSolicituds
 * @property PlanCompra[] $planCompras
 * @property DetalleRequisicion[] $detalleRequisicions
 * @property TipoArticulo $nuTipoArticulo
 */
class ArticuloTecnologico extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ArticuloTecnologico the static model class
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
		return 'articulo_tecnologico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_tipo_articulo, al_nombre_articulo, al_modelo_articulo, al_descripcion_articulo', 'required'),
			array('nu_tipo_articulo', 'numerical', 'integerOnly'=>true),
			array('al_marca_articulo, de_precio_unitario, al_color_articulo, al_unidad_medida', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_articulo, nu_tipo_articulo, al_nombre_articulo, al_marca_articulo, al_modelo_articulo, al_descripcion_articulo, de_precio_unitario, al_color_articulo, al_unidad_medida', 'safe', 'on'=>'search'),
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
			'detalleSolicituds' => array(self::HAS_MANY, 'DetalleSolicitud', 'nu_articulo'),
			'planCompras' => array(self::HAS_MANY, 'PlanCompra', 'nu_articulo'),
			'detalleRequisicions' => array(self::HAS_MANY, 'DetalleRequisicion', 'nu_articulo'),
			'tipo' => array(self::BELONGS_TO, 'TipoArticulo', 'nu_tipo_articulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_articulo' => 'Numero Articulo',
			'nu_tipo_articulo' => 'Tipo Articulo',
			'al_nombre_articulo' => 'Nombre Articulo',
			'al_marca_articulo' => 'Marca Articulo',
			'al_modelo_articulo' => 'Modelo Articulo',
			'al_descripcion_articulo' => 'Descripcion Articulo',
			'de_precio_unitario' => 'Precio Unitario',
			'al_color_articulo' => 'Color Articulo',
			'al_unidad_medida' => 'Unidad Medida',
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

		$criteria->compare('nu_articulo',$this->nu_articulo);
		$criteria->compare('nu_tipo_articulo',$this->nu_tipo_articulo);
		$criteria->compare('al_nombre_articulo',$this->al_nombre_articulo,true);
		$criteria->compare('al_marca_articulo',$this->al_marca_articulo,true);
		$criteria->compare('al_modelo_articulo',$this->al_modelo_articulo,true);
		$criteria->compare('al_descripcion_articulo',$this->al_descripcion_articulo,true);
		$criteria->compare('de_precio_unitario',$this->de_precio_unitario,true);
		$criteria->compare('al_color_articulo',$this->al_color_articulo,true);
		$criteria->compare('al_unidad_medida',$this->al_unidad_medida,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}