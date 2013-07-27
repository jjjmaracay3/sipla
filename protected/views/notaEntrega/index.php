<?php
$this->breadcrumbs=array(
	'Nota Entregas',
);

$this->menu=array(
	array('label'=>'Create NotaEntrega','url'=>array('create')),
	array('label'=>'Manage NotaEntrega','url'=>array('admin')),
);
?>

<h1>Nota Entregas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
