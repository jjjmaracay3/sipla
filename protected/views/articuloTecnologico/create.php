<?php
$this->breadcrumbs=array(
	'Articulo Tecnologicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArticuloTecnologico','url'=>array('index')),
	array('label'=>'Manage ArticuloTecnologico','url'=>array('admin')),
);?>

<h3>Create ArticuloTecnologico</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>