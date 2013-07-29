<?php


$this->breadcrumbs=array(
	'Articulo Tecnologicos'=>array('index'),
	$model->nu_articulo,
);
$this->menu=array(
	array('label'=>'Listar Articulo Tecnologico','url'=>array('index')),
	array('label'=>'Crear Articulo Tecnologico','url'=>array('create')),
	array('label'=>'Actualizar Articulo Tecnologico','url'=>array('update','id'=>$model->nu_articulo)),
	array('label'=>'Eliminar Articulo Tecnologico','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_articulo),'confirm'=>'Esta seguro de eliminar este Articulo Tecnologico?')),
	array('label'=>'Administrar Articulo Tecnologico','url'=>array('admin')),
);
?>

<h3>Ver Art&iacuteculo Tecnol&oacutegico #<?php echo $model->nu_articulo; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nu_articulo',
	//	'nu_tipo_articulo',
	//	'nu_tipo_articulo',
		'nuTipoArticulo.al_nombre_tipo',
		'al_nombre_articulo',
		'al_marca_articulo',
		'al_modelo_articulo',
		'al_descripcion_articulo',
		'de_precio_unitario',
		'al_color_articulo',
		'al_unidad_medida',
	),
)); ?>
