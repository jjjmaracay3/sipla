 <?php
/* @var $this ArticuloTecnologicoController */
/* @var $model ArticuloTecnologico */

$this->breadcrumbs=array(
	'Articulo Tecnologicos'=>array('index'),
	$model->nu_articulo,
);

$this->menu=array(
	array('label'=>'List ArticuloTecnologico', 'url'=>array('index')),
	array('label'=>'Create ArticuloTecnologico', 'url'=>array('create')),
	array('label'=>'Update ArticuloTecnologico', 'url'=>array('update', 'id'=>$model->nu_articulo)),
	array('label'=>'Delete ArticuloTecnologico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_articulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArticuloTecnologico', 'url'=>array('admin')),
);
?>

<h1>View ArticuloTecnologico #<?php echo $model->nu_articulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nu_articulo',
		'nu_tipo_articulo',
		'al_nombre_articulo',
		'al_marca_articulo',
		'al_modelo_articulo',
		'al_descripcion_articulo',
		'de_precio_unitario',
		'al_color_articulo',
		'al_unidad_medida',
	),
)); ?>
