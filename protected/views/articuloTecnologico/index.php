<?php
$this->breadcrumbs=array(
	'Articulo Tecnologicos',
);

$this->menu=array(
	array('label'=>'Crear Articulo Tecnologico','url'=>array('create')),
	array('label'=>'Administrar Articulo Tecnologico','url'=>array('admin')),
);
?>

<h3>Art&iacuteculo Tecnol&oacutegico</h3>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
