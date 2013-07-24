<?php
$this->breadcrumbs=array(
	'Tipo Articulos'=>array('index'),
	$model->nu_tipo_articulo=>array('view','id'=>$model->nu_tipo_articulo),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoArticulo','url'=>array('index')),
	array('label'=>'Create TipoArticulo','url'=>array('create')),
	array('label'=>'View TipoArticulo','url'=>array('view','id'=>$model->nu_tipo_articulo)),
	array('label'=>'Manage TipoArticulo','url'=>array('admin')),
);
?>

<h1>Update TipoArticulo <?php echo $model->nu_tipo_articulo; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>