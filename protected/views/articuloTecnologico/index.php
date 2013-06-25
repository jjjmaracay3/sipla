<?php
/* @var $this ArticuloTecnologicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articulo Tecnologicos',
);

$this->menu=array(
	array('label'=>'Create ArticuloTecnologico', 'url'=>array('create')),
	array('label'=>'Manage ArticuloTecnologico', 'url'=>array('admin')),
);
?>

<h1>Articulo Tecnologicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
