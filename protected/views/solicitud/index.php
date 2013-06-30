<?php
/* @var $this SolicitudController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solicituds',
);

$this->menu=array(
	array('label'=>'Create Solicitud', 'url'=>array('create')),
	array('label'=>'Manage Solicitud', 'url'=>array('admin')),
);
?>

<h1>Solicituds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
