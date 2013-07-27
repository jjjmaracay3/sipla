<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->nu_funcionario=>array('view','id'=>$model->nu_funcionario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Funcionario','url'=>array('index')),
	array('label'=>'Create Funcionario','url'=>array('create')),
	array('label'=>'View Funcionario','url'=>array('view','id'=>$model->nu_funcionario)),
	array('label'=>'Manage Funcionario','url'=>array('admin')),
);
?>

<h3>Update Funcionario <?php echo $model->nu_funcionario; ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>