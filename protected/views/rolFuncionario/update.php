<?php
$this->breadcrumbs=array(
	'Rol Funcionarios'=>array('index'),
	$model->nu_rol=>array('view','id'=>$model->nu_rol),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Rol Funcionario','url'=>array('index')),
	array('label'=>'Crear Rol Funcionario','url'=>array('create')),
	array('label'=>'Ver Rol Funcionario','url'=>array('view','id'=>$model->nu_rol)),
	array('label'=>'Administrar Rol Funcionario','url'=>array('admin')),
);
?>

<h1>Actualizar Rol Funcionario <?php echo $model->nu_rol; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
