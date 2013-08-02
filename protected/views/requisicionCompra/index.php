<?php
$this->breadcrumbs=array(
	'Requisicion Compras',
);

$this->menu=array(
	array('label'=>'Create RequisicionCompra','url'=>array('create')),
	array('label'=>'Manage RequisicionCompra','url'=>array('admin')),
);
?>

<h1>Requisicion Compras</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
