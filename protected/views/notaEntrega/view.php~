<?php
$this->breadcrumbs=array(
	'Nota Entregas'=>array('index'),
	$model->nu_nota,
);

$this->menu=array(
	array('label'=>'List NotaEntrega','url'=>array('index')),
	array('label'=>'Create NotaEntrega','url'=>array('create')),
	array('label'=>'Update NotaEntrega','url'=>array('update','id'=>$model->nu_nota)),
	array('label'=>'Delete NotaEntrega','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_nota),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NotaEntrega','url'=>array('admin')),
);
?>

<h3>View NotaEntrega #<?php echo $model->nu_nota; ?></h3>

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
