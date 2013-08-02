<?php
$this->breadcrumbs=array(
	'Requisicion Compras'=>array('index'),
	$model->nu_requisicion,
);

$this->menu=array(
	array('label'=>'List RequisicionCompra','url'=>array('index')),
	array('label'=>'Create RequisicionCompra','url'=>array('create')),
	array('label'=>'Update RequisicionCompra','url'=>array('update','id'=>$model->nu_requisicion)),
	array('label'=>'Delete RequisicionCompra','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_requisicion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RequisicionCompra','url'=>array('admin')),
);
?>

<h1>View RequisicionCompra #<?php echo $model->nu_requisicion; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nu_requisicion',
		'nu_plan_compra',
		'nu_funcionario',
		'fe_fecha_requisicion',
	),
)); ?>
