<?php
$this->breadcrumbs=array(
	'Tipo Articulos',
);

$this->menu=array(
	array('label'=>'Crear Tipo de Articulo','url'=>array('create')),
	array('label'=>'Administrar Tipo de Articulo','url'=>array('admin')),
);
?>


<h3>Tipo de Articulos</h3>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
