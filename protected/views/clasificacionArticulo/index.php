<?php
$this->breadcrumbs=array(
	'Clasificacion Articulos',
);

$this->menu=array(
	array('label'=>'Create ClasificacionArticulo','url'=>array('create')),
	array('label'=>'Manage ClasificacionArticulo','url'=>array('admin')),
);
?>

<h1>Clasificacion Articulos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
