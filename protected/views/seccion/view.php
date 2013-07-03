<?php
/* @var $this SeccionController */
/* @var $model Seccion */

$this->breadcrumbs=array(
	'Seccions'=>array('index'),
	$model->nu_seccion,
);

$this->menu=array(
	array('label'=>'List Seccion', 'url'=>array('index')),
	array('label'=>'Create Seccion', 'url'=>array('create')),
	array('label'=>'Update Seccion', 'url'=>array('update', 'id'=>$model->nu_seccion)),
	array('label'=>'Delete Seccion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_seccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Seccion', 'url'=>array('admin')),
);
?>

<h1>View Seccion #<?php echo $model->nu_seccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nu_seccion',
		'al_nombre_seccion',
		'al_descripcion_modulo',
	),
)); ?>
