<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Solicitudes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Solicitud', 'url'=>array('index')),
	array('label'=>'Administrar Solicitud', 'url'=>array('admin')),
);
?>

<h3>Crear Solicitud</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model,'modelb'=>$modelb)); ?>