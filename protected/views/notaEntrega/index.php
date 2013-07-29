<?php
$this->breadcrumbs=array(
	'Nota Entregas',
);

$this->menu=array(
	array('label'=>'Crear Nota de Entrega','url'=>array('create')),
	array('label'=>'Administrar Nota de Entrega','url'=>array('admin')),
);
?>

<h3>Nota de Entregas</h3>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
