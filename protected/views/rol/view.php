<?php
$this->breadcrumbs=array(
	'Rols'=>array('index'),
	$model->nu_rol,
);

$this->menu=array(
	array('label'=>'List Rol','url'=>array('index')),
	array('label'=>'Create Rol','url'=>array('create')),
	array('label'=>'Update Rol','url'=>array('update','id'=>$model->nu_rol)),
	array('label'=>'Delete Rol','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_rol),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rol','url'=>array('admin')),
);
?>

<h1>View Rol #<?php echo $model->nu_rol; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nu_rol',
		'al_nombre_rol',
		'al_descipcion_rol',
	),
)); ?>
