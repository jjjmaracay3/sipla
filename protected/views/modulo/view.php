<?php
/* @var $this ModuloController */
/* @var $model Modulo */

$this->breadcrumbs=array(
	'Modulos'=>array('index'),
	$model->nu_modulo,
);

$this->menu=array(
	array('label'=>'List Modulo', 'url'=>array('index')),
	array('label'=>'Create Modulo', 'url'=>array('create')),
	array('label'=>'Update Modulo', 'url'=>array('update', 'id'=>$model->nu_modulo)),
	array('label'=>'Delete Modulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_modulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Modulo', 'url'=>array('admin')),
);
?>

<h1>View Modulo #<?php echo $model->nu_modulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nu_modulo',
		'nu_seccion',
		'al_nombre_modulo',
		'al_descripcion_modulo',
	),
)); ?>
