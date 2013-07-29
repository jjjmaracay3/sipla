<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */
$this->breadcrumbs=array(
	'Solicitudes'=>array('index'),
	$model->nu_solicitud,
);
$this->menu=array(
	array('label'=>'Listar Solicitud', 'url'=>array('index')),
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
	array('label'=>'Actualizar Solicitud', 'url'=>array('update', 'id'=>$model->nu_solicitud)),
	array('label'=>'Eliminar Solicitud', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_solicitud),'confirm'=>'Esta usted seguro de eliminar esta solicitud?')),
	array('label'=>'Administrar Solicitud', 'url'=>array('admin')),
);
?>

<h3>Ver Solicitud #<?php echo $model->nu_solicitud; ?></h3>
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
