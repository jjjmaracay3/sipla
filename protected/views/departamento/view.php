<?php
$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->nu_numero_departamento,
);

$this->menu=array(
	array('label'=>'List Departamento','url'=>array('index')),
	array('label'=>'Create Departamento','url'=>array('create')),
	array('label'=>'Update Departamento','url'=>array('update','id'=>$model->nu_numero_departamento)),
	array('label'=>'Delete Departamento','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_numero_departamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Departamento','url'=>array('admin')),
);
?>

<h3>View Departamento #<?php echo $model->nu_numero_departamento; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nu_numero_departamento',
		'al_nombre_departamento',
		'nu_tlf_departamento',
	),
)); ?>
