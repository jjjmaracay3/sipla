<?php
$this->breadcrumbs=array(
	'Articulo Tecnologicos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Articulo Tecnologico','url'=>array('index')),
	array('label'=>'Crear Articulo Tecnologico','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('articulo-tecnologico-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Administrar Art&iacuteculo Tecnol&oacutegico</h3>

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
	'id'=>'articulo-tecnologico-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'nu_articulo',
		'nuTipoArticulo.al_nombre_tipo',
		'al_nombre_articulo',
		'al_marca_articulo',
		//'al_modelo_articulo',
		//'al_descripcion_articulo',
		
		//'de_precio_unitario',
		//'al_color_articulo',
		//'al_unidad_medida',
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>
