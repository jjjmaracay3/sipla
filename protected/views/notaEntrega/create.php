<?php
$this->breadcrumbs=array(
	'Nota Entregas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NotaEntrega','url'=>array('index')),
	array('label'=>'Manage NotaEntrega','url'=>array('admin')),
);
?>

<h3>Create NotaEntrega</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>