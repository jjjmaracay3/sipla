<?php
$this->breadcrumbs=array(
	'Articulo Tecnologicos',
);

$this->menu=array(
	array('label'=>'Create ArticuloTecnologico','url'=>array('create')),
	array('label'=>'Manage ArticuloTecnologico','url'=>array('admin')),
);
?>

<h1>Articulo Tecnologicos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
