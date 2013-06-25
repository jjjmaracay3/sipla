<?php
/* @var $this TipoArticuloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Articulos',
);

$this->menu=array(
	array('label'=>'Create TipoArticulo', 'url'=>array('create')),
	array('label'=>'Manage TipoArticulo', 'url'=>array('admin')),
);
?>

<h1>Tipo Articulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
