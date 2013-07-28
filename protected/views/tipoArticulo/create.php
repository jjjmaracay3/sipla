<?php
$this->breadcrumbs=array(
	'Tipo Articulos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Tipo de Articulo','url'=>array('index')),
	array('label'=>'Administrar Tipo de Articulo','url'=>array('admin')),
);
?>

<h3>Crear Tipo de Articulo</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
