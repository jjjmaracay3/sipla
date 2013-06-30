<?php
/* @var $this RolFuncionarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rol Funcionarios',
);

$this->menu=array(
	array('label'=>'Create RolFuncionario', 'url'=>array('create')),
	array('label'=>'Manage RolFuncionario', 'url'=>array('admin')),
);
?>

<h1>Rol Funcionarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
