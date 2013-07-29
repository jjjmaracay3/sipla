<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Solicitudes'=>array('index'),
	$model->nu_solicitud=>array('view','id'=>$model->nu_solicitud),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Solicitud', 'url'=>array('index')),
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
	array('label'=>'Ver Solicitud', 'url'=>array('view', 'id'=>$model->nu_solicitud)),
	array('label'=>'Administrar Solicitud', 'url'=>array('admin')),
);
?>
<h3>Actualizar Solicitud <?php echo $model->nu_solicitud; ?><?php echo $modelb->nu_solicitud;?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model,'modelb'=>$modelb)); ?>
