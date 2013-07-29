<?php
$this->breadcrumbs=array(
	'Rol Funcionarios',
);

$this->menu=array(
	array('label'=>'Crear Rol Funcionario','url'=>array('create')),
	array('label'=>'Manage Rol Funcionario','url'=>array('admin')),
);
?>

<h1>Rol Funcionario</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
