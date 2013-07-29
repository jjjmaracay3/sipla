<?php
$this->breadcrumbs=array(
	'Rol Funcionarios'=>array('index'),
	$model->nu_rol,
);

$this->menu=array(
	array('label'=>'Listar Rol Funcionario','url'=>array('index')),
	array('label'=>'Crear Rol Funcionario','url'=>array('create')),
	array('label'=>'Actualizar Rol Funcionario','url'=>array('update','id'=>$model->nu_rol)),
	array('label'=>'Eliminar Rol Funcionario','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_rol),'confirm'=>'Esta seguro de eliminar este Rol Funcionario?')),
	array('label'=>'Administrar RolFuncionario','url'=>array('admin')),
);
?>

<h1>Ver Rol Funcionario #<?php echo $model->nu_rol; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nu_rol',
		'al_nombre_rol',
		'al_descipcion_rol',
	),
)); ?>
