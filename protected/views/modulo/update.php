<?php
/* @var $this ModuloController */
/* @var $model Modulo */

$this->breadcrumbs=array(
	'Modulos'=>array('index'),
	$model->nu_modulo=>array('view','id'=>$model->nu_modulo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Modulo', 'url'=>array('index')),
	array('label'=>'Create Modulo', 'url'=>array('create')),
	array('label'=>'View Modulo', 'url'=>array('view', 'id'=>$model->nu_modulo)),
	array('label'=>'Manage Modulo', 'url'=>array('admin')),
);
?>

<h1>Update Modulo <?php echo $model->nu_modulo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>