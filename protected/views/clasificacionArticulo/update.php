<?php
$this->breadcrumbs=array(
	'Clasificacion Articulos'=>array('index'),
	$model->nu_clasificacion_articulo=>array('view','id'=>$model->nu_clasificacion_articulo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Clasificacion de Articulo','url'=>array('index')),
	array('label'=>'Crear Clasificacion de Articulo','url'=>array('create')),
	array('label'=>'Ver Clasificacion de Articulo','url'=>array('view','id'=>$model->nu_clasificacion_articulo)),
	array('label'=>'Administrar Clasificacion de Articulo','url'=>array('admin')),
);
?>

<h3>Actualizar Clasificaci&oacuten de Art&iacuteculo <?php echo $model->nu_clasificacion_articulo; ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
