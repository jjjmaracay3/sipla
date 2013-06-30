<?php
/* @var $this ClasificacionArticuloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clasificacion Articulos',
);

$this->menu=array(
	array('label'=>'Create ClasificacionArticulo', 'url'=>array('create')),
	array('label'=>'Manage ClasificacionArticulo', 'url'=>array('admin')),
);
?>

<h1>Clasificacion Articulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
