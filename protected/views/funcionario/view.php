<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->nu_funcionario,
);

$this->menu=array(
	array('label'=>'List Funcionario','url'=>array('index')),
	array('label'=>'Create Funcionario','url'=>array('create')),
	array('label'=>'Update Funcionario','url'=>array('update','id'=>$model->nu_funcionario)),
	array('label'=>'Delete Funcionario','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_funcionario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Funcionario','url'=>array('admin')),
);
?>

<h3>View Funcionario #<?php echo $model->nu_funcionario; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nu_funcionario',
		'nuNumeroDepartamento.al_nombre_departamento',
		/*'nu_numero_departamento',
		'nu_rol',*/
		'nuRol.al_nombre_rol',
		'al_nombre_funcionario',
		'al_apellido_funcionario',
		'nu_cedula_funcionario',
		'al_cargo_funcionario',
		'al_correo_funcionario',
		'username',
		'password',
		'session',
	),
)); ?>
