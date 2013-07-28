<?php
$this->breadcrumbs=array(
	'Articulo Tecnologicos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Articulo Tecnologico','url'=>array('index')),
	array('label'=>'Administrar Articulo Tecnologico','url'=>array('admin')),
);?>

<h3>Crear Art&iacuteculo Tecnol&oacutegico</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
