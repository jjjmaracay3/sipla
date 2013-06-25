<?php
/* @var $this RolFuncionarioController */
/* @var $model RolFuncionario */

$this->breadcrumbs=array(
	'Rol Funcionarios'=>array('index'),
	$model->nu_rol=>array('view','id'=>$model->nu_rol),
	'Update',
);

$this->menu=array(
	array('label'=>'List RolFuncionario', 'url'=>array('index')),
	array('label'=>'Create RolFuncionario', 'url'=>array('create')),
	array('label'=>'View RolFuncionario', 'url'=>array('view', 'id'=>$model->nu_rol)),
	array('label'=>'Manage RolFuncionario', 'url'=>array('admin')),
);
?>

<h1>Update RolFuncionario <?php echo $model->nu_rol; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>