<?php
$this->breadcrumbs=array(
	'Detalle Solicituds',
);

$this->menu=array(
	array('label'=>'Create DetalleSolicitud','url'=>array('create')),
	array('label'=>'Manage DetalleSolicitud','url'=>array('admin')),
);
?>

<h1>Detalle Solicituds</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
