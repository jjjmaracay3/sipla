<?php
$this->breadcrumbs=array(
	'Departamentos',
);

$this->menu=array(
	array('label'=>'Crear Departamento','url'=>array('create')),
	array('label'=>'Administrar Departamento','url'=>array('admin')),
);
?>

<h3>Departamentos</h3>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
