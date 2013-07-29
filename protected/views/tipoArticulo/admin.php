<?php
$this->breadcrumbs=array(
	'Tipo Articulos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Tipo de Articulo','url'=>array('index')),
	array('label'=>'Crear Tipo de Articulo','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tipo-articulo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Administrar Tipo de Articulos</h3>

<p>
Tambi&eacuten puede escribir un operador de comparaci&oacuten (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al principio de cada uno de los valores de b&uacutesqueda para especificar c&oacutemo se debe hacer la comparaci&oacuten.
</p>

<?php echo CHtml::link('B&uacutesqueda Avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'type'=>'striped bordered condensed hover',
	'id'=>'tipo-articulo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nu_tipo_articulo',
		'nu_clasificacion_articulo',
		'al_nombre_tipo',
				array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
