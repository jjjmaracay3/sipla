<?php
$this->breadcrumbs=array(
	'Tipo Articulos'=>array('index'),
	$model->nu_tipo_articulo,
);

$this->menu=array(
	array('label'=>'List TipoArticulo','url'=>array('index')),
	array('label'=>'Create TipoArticulo','url'=>array('create')),
	array('label'=>'Update TipoArticulo','url'=>array('update','id'=>$model->nu_tipo_articulo)),
	array('label'=>'Delete TipoArticulo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_tipo_articulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoArticulo','url'=>array('admin')),
);
?>

<h3>View TipoArticulo #<?php echo $model->nu_tipo_articulo; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'nu_tipo_articulo',
		'nu_clasificacion_articulo',
		'clasificacion.al_nombre_clasificacion', //alias definido en el modelo seguido del controlador
		//punto
		'al_nombre_tipo',
		'al_descripcion_tipo',
	),
)); ?>
