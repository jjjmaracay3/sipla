<?php
$this->breadcrumbs=array(
	'Rols'=>array('index'),
	$model->nu_rol=>array('view','id'=>$model->nu_rol),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rol','url'=>array('index')),
	array('label'=>'Create Rol','url'=>array('create')),
	array('label'=>'View Rol','url'=>array('view','id'=>$model->nu_rol)),
	array('label'=>'Manage Rol','url'=>array('admin')),
);
?>

<h1>Update Rol <?php echo $model->nu_rol; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>