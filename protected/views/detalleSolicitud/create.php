<?php
/* @var $this DetalleSolicitudController */
/* @var $model DetalleSolicitud */

$this->breadcrumbs=array(
	'Detalle Solicituds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetalleSolicitud', 'url'=>array('index')),
	array('label'=>'Manage DetalleSolicitud', 'url'=>array('admin')),
);
?>

<h1>Create DetalleSolicitud</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>