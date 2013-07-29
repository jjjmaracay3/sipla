<?php
$this->breadcrumbs=array(
	'Nota Entregas'=>array('index'),
	$model->nu_nota,
);

$this->menu=array(
	array('label'=>'Listar Nota de Entrega','url'=>array('index')),
	array('label'=>'Crear Nota de Entrega','url'=>array('create')),
	array('label'=>'Actualizar Nota de Entrega','url'=>array('update','id'=>$model->nu_nota)),
	array('label'=>'Delete Nota de Entrega','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_nota),'confirm'=>'Esta seguro de liminar esta Nota de Entrega?')),
	array('label'=>'Administrar Nota de Entrega','url'=>array('admin')),
);
?>

<h3>Ver Nota de Entrega #<?php echo $model->nu_nota; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nu_nota',
		'nu_solicitud',
		'nu_funcionario',
		'fe_fecha_nota',
		'nu_cantidad_entregada',
	),
)); ?>
