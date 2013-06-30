<?php
/* @var $this DetalleSolicitudController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detalle Solicituds',
);

$this->menu=array(
	array('label'=>'Create DetalleSolicitud', 'url'=>array('create')),
	array('label'=>'Manage DetalleSolicitud', 'url'=>array('admin')),
);
?>

<h1>Detalle Solicituds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
