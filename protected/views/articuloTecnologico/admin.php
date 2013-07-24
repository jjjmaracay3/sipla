<?php
$this->breadcrumbs=array(
	'Articulo Tecnologicos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ArticuloTecnologico','url'=>array('index')),
	array('label'=>'Create ArticuloTecnologico','url'=>array('create')),
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

<h1>Manage Articulo Tecnologicos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'type'=>'striped bordered condensed',
	'id'=>'articulo-tecnologico-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nu_articulo',
		'nu_tipo_articulo',
		'al_nombre_articulo',
		/*'al_marca_articulo',
		'al_modelo_articulo',
		'al_descripcion_articulo',
		
		'de_precio_unitario',
		'al_color_articulo',
		'al_unidad_medida',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
