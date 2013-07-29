<?php
$this->breadcrumbs=array(
	'Tipo Articulos'=>array('index'),
	$model->nu_tipo_articulo,
);

$this->menu=array(
	array('label'=>'Listar Tipo de Articulo','url'=>array('index')),
	array('label'=>'Crear Tipo de Articulo','url'=>array('create')),
	array('label'=>'Actualizar Tipo de Articulo','url'=>array('update','id'=>$model->nu_tipo_articulo)),
	array('label'=>'Eliminar Tipo de Articulo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_tipo_articulo),'confirm'=>'Estas seguro de eliminar este Tipo de Articulo?')),
	array('label'=>'Administrar Tipo de Articulo','url'=>array('admin')),
);
?>

<h3>Ver TipoArticulo #<?php echo $model->nu_tipo_articulo; ?></h3>

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
