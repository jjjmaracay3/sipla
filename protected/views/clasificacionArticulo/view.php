<?php
/* @var $this ClasificacionArticuloController */
/* @var $model ClasificacionArticulo */

$this->breadcrumbs=array(
	'Clasificacion Articulos'=>array('index'),
	$model->nu_clasificacion_articulo,
);

$this->menu=array(
	array('label'=>'List ClasificacionArticulo', 'url'=>array('index')),
	array('label'=>'Create ClasificacionArticulo', 'url'=>array('create')),
	array('label'=>'Update ClasificacionArticulo', 'url'=>array('update', 'id'=>$model->nu_clasificacion_articulo)),
	array('label'=>'Delete ClasificacionArticulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_clasificacion_articulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClasificacionArticulo', 'url'=>array('admin')),
);
?>

<h1>View ClasificacionArticulo #<?php echo $model->nu_clasificacion_articulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nu_clasificacion_articulo',
		'al_nombre_clasificacion',
		'al_descripcion_clasificacion',
	),
)); ?>
