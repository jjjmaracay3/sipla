<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Funcionario','url'=>array('index')),
	array('label'=>'Administrar Funcionario','url'=>array('admin')),
);
?>

<h3>Crear Funcionario</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
