<?php
$this->breadcrumbs=array(
	'Nota Entregas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Nota de Entrega','url'=>array('index')),
	array('label'=>'Administrar Nota de Entrega','url'=>array('admin')),
);
?>

<h3>Crear Nota de Entrega</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
