<?php
$this->breadcrumbs=array(
	'Rol Funcionarios'=>array('index'),
	$model->nu_rol,
);

$this->menu=array(
	array('label'=>'List RolFuncionario','url'=>array('index')),
	array('label'=>'Create RolFuncionario','url'=>array('create')),
	array('label'=>'Update RolFuncionario','url'=>array('update','id'=>$model->nu_rol)),
	array('label'=>'Delete RolFuncionario','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_rol),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RolFuncionario','url'=>array('admin')),
);
?>

<h1>View RolFuncionario #<?php echo $model->nu_rol; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nu_rol',
		'al_nombre_rol',
		'al_descipcion_rol',
	),
)); ?>
