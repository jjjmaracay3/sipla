<?php
/* @var $this TipoArticuloController */
/* @var $model TipoArticulo */

$this->breadcrumbs=array(
	'Tipo Articulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoArticulo', 'url'=>array('index')),
	array('label'=>'Manage TipoArticulo', 'url'=>array('admin')),
);
?>

<h1>Create TipoArticulo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>