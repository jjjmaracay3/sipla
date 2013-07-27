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

<h1>Create NotaEntrega</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>