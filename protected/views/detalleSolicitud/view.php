<?php
/* @var $this DetalleSolicitudController */
/* @var $model DetalleSolicitud */

$this->breadcrumbs=array(
	'Detalle Solicituds'=>array('index'),
	$model->nu_detalle_solicitud,
);

$this->menu=array(
	array('label'=>'List DetalleSolicitud', 'url'=>array('index')),
	array('label'=>'Create DetalleSolicitud', 'url'=>array('create')),
	array('label'=>'Update DetalleSolicitud', 'url'=>array('update', 'id'=>$model->nu_detalle_solicitud)),
	array('label'=>'Delete DetalleSolicitud', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_detalle_solicitud),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetalleSolicitud', 'url'=>array('admin')),
);
?>

<h1>View DetalleSolicitud #<?php echo $model->nu_detalle_solicitud; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nu_detalle_solicitud',
		'nu_solicitud',
		'nu_articulo',
		'nu_cantidad_solicitada',
		'al_justificacion',
	),
)); ?>
