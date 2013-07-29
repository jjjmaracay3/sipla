<?php
$this->breadcrumbs=array(
	'Funcionarios',
);

$this->menu=array(
	array('label'=>'Crear Funcionario','url'=>array('create')),
	array('label'=>'Administrar Funcionario','url'=>array('admin')),
);
?>

<h3>Funcionarios</h3>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
