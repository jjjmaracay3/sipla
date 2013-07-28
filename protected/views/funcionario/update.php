<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->nu_funcionario=>array('view','id'=>$model->nu_funcionario),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Funcionario','url'=>array('index')),
	array('label'=>'Crear Funcionario','url'=>array('create')),
	array('label'=>'Ver Funcionario','url'=>array('view','id'=>$model->nu_funcionario)),
	array('label'=>'Administrar Funcionario','url'=>array('admin')),
);
?>

<h3>Actualizar Funcionario <?php echo $model->nu_funcionario; ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
