<?php
$this->breadcrumbs=array(
	'Plan Compras'=>array('index'),
	$model->nu_plan_compra,
);

$this->menu=array(
	array('label'=>'List PlanCompra','url'=>array('index')),
	array('label'=>'Create PlanCompra','url'=>array('create')),
	array('label'=>'Update PlanCompra','url'=>array('update','id'=>$model->nu_plan_compra)),
	array('label'=>'Delete PlanCompra','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_plan_compra),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PlanCompra','url'=>array('admin')),
);
?>

<h1>View PlanCompra #<?php echo $model->nu_plan_compra; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nu_plan_compra',
		'nu_articulo',
		'fe_fecha_plan',
		'nu_cantidad_articulo',
		'nu_cantidad_pendiente',
	),
)); ?>
