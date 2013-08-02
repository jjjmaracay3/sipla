<?php
$this->breadcrumbs=array(
	'Plan Compras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PlanCompra','url'=>array('index')),
	array('label'=>'Manage PlanCompra','url'=>array('admin')),
);
?>

<h1>Create PlanCompra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>