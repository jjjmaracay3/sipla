<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Solicituds'=>array('index'),
	$model->nu_solicitud,
);

$this->menu=array(
	array('label'=>'List Solicitud', 'url'=>array('index')),
	array('label'=>'Create Solicitud', 'url'=>array('create')),
	array('label'=>'Update Solicitud', 'url'=>array('update', 'id'=>$model->nu_solicitud)),
	array('label'=>'Delete Solicitud', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_solicitud),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Solicitud', 'url'=>array('admin')),
);
?>

<h1>View Solicitud #<?php echo $model->nu_solicitud; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nu_solicitud',
		'nu_funcionario',
		'nu_numero_departamento',
		'al_estado_solicitud',
		'fe_solicitud',
	),
)); ?>
