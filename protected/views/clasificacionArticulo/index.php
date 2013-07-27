<?php
$this->breadcrumbs=array(
	'Clasificacion Articulos',
);

$this->menu=array(
	array('label'=>'Create ClasificacionArticulo','url'=>array('create')),
	array('label'=>'Manage ClasificacionArticulo','url'=>array('admin')),
);
?>

<h3>Clasificacion Articulos</h3>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
