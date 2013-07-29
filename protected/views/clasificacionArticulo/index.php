<?php
$this->breadcrumbs=array(
	'Clasificacion Articulos',
);

$this->menu=array(
	array('label'=>'Crear Clasificacion de Articulo','url'=>array('create')),
	array('label'=>'Administrar Clasificacion de Articulo','url'=>array('admin')),
);
?>

<h3>Clasificaci&oacuten de Art&iacuteculo</h3>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
