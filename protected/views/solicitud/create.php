<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Solicituds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Solicitud', 'url'=>array('index')),
	array('label'=>'Manage Solicitud', 'url'=>array('admin')),
);
?>

<h4>Create Solicitud</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model,'modelb'=>$modelb)); ?>