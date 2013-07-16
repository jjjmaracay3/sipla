<?php
$this->breadcrumbs=array(
	'Articulo Tecnologicos'=>array('index'),
	$model->nu_articulo=>array('view','id'=>$model->nu_articulo),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArticuloTecnologico','url'=>array('index')),
	array('label'=>'Create ArticuloTecnologico','url'=>array('create')),
	array('label'=>'View ArticuloTecnologico','url'=>array('view','id'=>$model->nu_articulo)),
	array('label'=>'Manage ArticuloTecnologico','url'=>array('admin')),
);
?>

<h1>Update ArticuloTecnologico <?php echo $model->nu_articulo; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>