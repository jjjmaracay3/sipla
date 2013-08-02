<?php
/* @var $this SolicitudController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solicitudes',
);

$this->menu=array(
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
	array('label'=>'Atender Solicitud', 'url'=>array('#')),
	array('label'=>'Administrar Solicitud', 'url'=>array('admin')),
);
?>

<h3>Solicitudes</h3>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
