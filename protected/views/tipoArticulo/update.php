<?php
$this->breadcrumbs=array(
	'Tipo Articulos'=>array('index'),
	$model->nu_tipo_articulo=>array('view','id'=>$model->nu_tipo_articulo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tipo de Articulo','url'=>array('index')),
	array('label'=>'Crear Tipo de Articulo','url'=>array('create')),
	array('label'=>'Ver Tipo de Articulo','url'=>array('view','id'=>$model->nu_tipo_articulo)),
	array('label'=>'Administrar Tipo de Articulo','url'=>array('admin')),
);
?>

<h3>Actualizar TipoArticulo <?php echo $model->nu_tipo_articulo; ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
