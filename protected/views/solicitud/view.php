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

<h3>View Solicitud #<?php echo $model->nu_solicitud; ?></h3>
<h5>Su solicitud de Articulos Tecnologicos fue enviada exitosamente, pronto nos comunicaremos con usted con el fin de darle respuesta a su requerimiento en el menor tiempo posible.</h5>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nu_solicitud',
		'funcionario.al_nombre_funcionario',
		'departamento.al_nombre_departamento',
		'al_estado_solicitud',
		'fe_solicitud',
	),
)); ?>
