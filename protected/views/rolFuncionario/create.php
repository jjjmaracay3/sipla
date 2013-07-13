<?php
$this->breadcrumbs=array(
	'Rol Funcionarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RolFuncionario','url'=>array('index')),
	array('label'=>'Manage RolFuncionario','url'=>array('admin')),
);
?>

<h1>Create RolFuncionario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>