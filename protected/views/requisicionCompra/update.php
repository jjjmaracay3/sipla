<?php
$this->breadcrumbs=array(
	'Requisicion Compras'=>array('index'),
	$model->nu_requisicion=>array('view','id'=>$model->nu_requisicion),
	'Update',
);

$this->menu=array(
	array('label'=>'List RequisicionCompra','url'=>array('index')),
	array('label'=>'Create RequisicionCompra','url'=>array('create')),
	array('label'=>'View RequisicionCompra','url'=>array('view','id'=>$model->nu_requisicion)),
	array('label'=>'Manage RequisicionCompra','url'=>array('admin')),
);
?>

<h1>Update RequisicionCompra <?php echo $model->nu_requisicion; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>