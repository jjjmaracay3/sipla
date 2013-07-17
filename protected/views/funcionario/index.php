<?php
$this->breadcrumbs=array(
	'Funcionarios',
);

$this->menu=array(
	array('label'=>'Create Funcionario','url'=>array('create')),
	array('label'=>'Manage Funcionario','url'=>array('admin')),
);
?>

<h1>Funcionarios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
