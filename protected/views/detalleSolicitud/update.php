<?php
$this->breadcrumbs=array(
	'Detalle Solicituds'=>array('index'),
	$model->nu_detalle_solicitud=>array('view','id'=>$model->nu_detalle_solicitud),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetalleSolicitud','url'=>array('index')),
	array('label'=>'Create DetalleSolicitud','url'=>array('create')),
	array('label'=>'View DetalleSolicitud','url'=>array('view','id'=>$model->nu_detalle_solicitud)),
	array('label'=>'Manage DetalleSolicitud','url'=>array('admin')),
);
?>

<h1>Update DetalleSolicitud <?php echo $model->nu_detalle_solicitud; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>