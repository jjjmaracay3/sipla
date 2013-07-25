<?php

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'searchForm',
    'type'=>'search',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
 
<?php echo $form->textFieldRow($model, 'textField', array('class'=>'input-medium', 'prepend'=>'<i class="icon-search"></i>')); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Go')); ?>
 
<?php $this->endWidget(); ?>

$this->breadcrumbs=array(
	'Articulo Tecnologicos'=>array('index'),
	$model->nu_articulo,
);

$this->menu=array(
	array('label'=>'List ArticuloTecnologico','url'=>array('index')),
	array('label'=>'Create ArticuloTecnologico','url'=>array('create')),
	array('label'=>'Update ArticuloTecnologico','url'=>array('update','id'=>$model->nu_articulo)),
	array('label'=>'Delete ArticuloTecnologico','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_articulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArticuloTecnologico','url'=>array('admin')),
);
?>

<h1>View ArticuloTecnologico #<?php echo $model->nu_articulo; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nu_articulo',
	//	'nu_tipo_articulo',
	//	'nu_tipo_articulo',
		'nuTipoArticulo.al_nombre_tipo',
		'al_nombre_articulo',
		'al_marca_articulo',
		'al_modelo_articulo',
		'al_descripcion_articulo',
		'de_precio_unitario',
		'al_color_articulo',
		'al_unidad_medida',
	),
)); ?>
