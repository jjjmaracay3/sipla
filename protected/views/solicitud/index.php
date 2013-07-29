<?php
/* @var $this SolicitudController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solicituds',
);

$this->menu=array(
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
	array('label'=>'Administrar Solicitud', 'url'=>array('admin')),
);
?>

<h3>Solicituds</h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
