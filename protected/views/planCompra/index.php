<?php
$this->breadcrumbs=array(
	'Plan Compras',
);

$this->menu=array(
	array('label'=>'Create PlanCompra','url'=>array('create')),
	array('label'=>'Manage PlanCompra','url'=>array('admin')),
);
?>

<h1>Plan Compras</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
