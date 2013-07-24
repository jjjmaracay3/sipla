<?php
$this->breadcrumbs=array(
	'Articulo Tecnologicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArticuloTecnologico','url'=>array('index')),
	array('label'=>'Manage ArticuloTecnologico','url'=>array('admin')),
);
?>

<h1>Create ArticuloTecnologico</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>