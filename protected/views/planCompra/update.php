<?php
$this->breadcrumbs=array(
	'Plan Compras'=>array('index'),
	$model->nu_plan_compra=>array('view','id'=>$model->nu_plan_compra),
	'Update',
);

$this->menu=array(
	array('label'=>'List PlanCompra','url'=>array('index')),
	array('label'=>'Create PlanCompra','url'=>array('create')),
	array('label'=>'View PlanCompra','url'=>array('view','id'=>$model->nu_plan_compra)),
	array('label'=>'Manage PlanCompra','url'=>array('admin')),
);
?>

<h1>Update PlanCompra <?php echo $model->nu_plan_compra; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>