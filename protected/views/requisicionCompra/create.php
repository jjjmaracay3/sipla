<?php
$this->breadcrumbs=array(
	'Requisicion Compras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RequisicionCompra','url'=>array('index')),
	array('label'=>'Manage RequisicionCompra','url'=>array('admin')),
);
?>

<h1>Create RequisicionCompra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>