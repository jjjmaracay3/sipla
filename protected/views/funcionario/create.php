<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Funcionario','url'=>array('index')),
	array('label'=>'Manage Funcionario','url'=>array('admin')),
);
?>

<h3>Create Funcionario</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>