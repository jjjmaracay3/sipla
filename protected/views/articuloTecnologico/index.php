<?php
$this->breadcrumbs=array(
	'Articulo Tecnologicos',
);

$this->menu=array(
	array('label'=>'Create ArticuloTecnologico','url'=>array('create')),
	array('label'=>'Manage ArticuloTecnologico','url'=>array('admin')),
);
?>

<h3>Articulo Tecnologicos</h3>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
