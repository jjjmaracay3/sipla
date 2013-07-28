<?php
$this->breadcrumbs=array(
	'Rol Funcionarios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Rol Funcionario','url'=>array('index')),
	array('label'=>'Administrar Rol Funcionario','url'=>array('admin')),
);
?>

<h1>Crear Rol Funcionario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
