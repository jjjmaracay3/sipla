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

<h1>Create Solicitud</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'modelb'=>$modelb)); ?>