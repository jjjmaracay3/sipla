<?php
$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Departamento','url'=>array('index')),
	array('label'=>'Administrar Departamento','url'=>array('admin')),
);
?>

<h3>Crear Departamento</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
