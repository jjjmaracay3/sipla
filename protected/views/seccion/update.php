<?php
/* @var $this SeccionController */
/* @var $model Seccion */

$this->breadcrumbs=array(
	'Seccions'=>array('index'),
	$model->nu_seccion=>array('view','id'=>$model->nu_seccion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Seccion', 'url'=>array('index')),
	array('label'=>'Create Seccion', 'url'=>array('create')),
	array('label'=>'View Seccion', 'url'=>array('view', 'id'=>$model->nu_seccion)),
	array('label'=>'Manage Seccion', 'url'=>array('admin')),
);
?>

<h1>Update Seccion <?php echo $model->nu_seccion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>