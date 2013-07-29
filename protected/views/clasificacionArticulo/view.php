<?php
$this->breadcrumbs=array(
	'Clasificacion Articulos'=>array('index'),
	$model->nu_clasificacion_articulo,
);

$this->menu=array(
	array('label'=>'Listar Clasificacion de Articulo','url'=>array('index')),
	array('label'=>'Crear Clasificacion de Articulo','url'=>array('create')),
	array('label'=>'Actuaizar Clasificacion de Articulo','url'=>array('update','id'=>$model->nu_clasificacion_articulo)),
	array('label'=>'Eliminar Clasificacion de Articulo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_clasificacion_articulo),'confirm'=>'Esta seguro de eliminar esta Clasificion de Articulo?')),
	array('label'=>'Administrar Clasificacion de Articulo','url'=>array('admin')),
);
?>

<h3>Ver Clasificaci&oacuten de Art&iacuteculos #<?php echo $model->nu_clasificacion_articulo; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nu_clasificacion_articulo',
		'al_nombre_clasificacion',
		'al_descripcion_clasificacion',
	),
)); ?>
