<?php
$this->breadcrumbs=array(
	'Rols',
);

$this->menu=array(
	array('label'=>'Create Rol','url'=>array('create')),
	array('label'=>'Manage Rol','url'=>array('admin')),
);
?>

<h1>Rols</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
