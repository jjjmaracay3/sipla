<?php
$this->breadcrumbs=array(
	'Clasificacion Articulos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Clasificacion de Articulo','url'=>array('index')),
	array('label'=>'Administrar Clasificacion de Articulo','url'=>array('admin')),
);
?>

<h3>Crear Clasificaci&oacuten de Art&iacuteculo</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
