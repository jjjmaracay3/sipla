<?php
$this->breadcrumbs=array(
	'Clasificacion Articulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClasificacionArticulo','url'=>array('index')),
	array('label'=>'Manage ClasificacionArticulo','url'=>array('admin')),
);
?>

<h1>Create ClasificacionArticulo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>