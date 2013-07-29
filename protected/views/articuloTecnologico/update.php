<?php
$this->breadcrumbs=array(
	'Articulo Tecnologicos'=>array('index'),
	$model->nu_articulo=>array('view','id'=>$model->nu_articulo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Articulo Tecnologico','url'=>array('index')),
	array('label'=>'Crear Articulo Tecnologico','url'=>array('create')),
	array('label'=>'Ver Articulo Tecnologico','url'=>array('view','id'=>$model->nu_articulo)),
	array('label'=>'Administrar Articulo Tecnologico','url'=>array('admin')),
);
?>

<h3>Actualizar Art&iacuteculo Tecnol&oacutegico <?php echo $model->nu_articulo; ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
