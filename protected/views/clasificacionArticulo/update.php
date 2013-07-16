<?php
$this->breadcrumbs=array(
	'Clasificacion Articulos'=>array('index'),
	$model->nu_clasificacion_articulo=>array('view','id'=>$model->nu_clasificacion_articulo),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClasificacionArticulo','url'=>array('index')),
	array('label'=>'Create ClasificacionArticulo','url'=>array('create')),
	array('label'=>'View ClasificacionArticulo','url'=>array('view','id'=>$model->nu_clasificacion_articulo)),
	array('label'=>'Manage ClasificacionArticulo','url'=>array('admin')),
);
?>

<h1>Update ClasificacionArticulo <?php echo $model->nu_clasificacion_articulo; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>