<?php
$this->breadcrumbs=array(
	'Clasificacion Articulos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ClasificacionArticulo','url'=>array('index')),
	array('label'=>'Create ClasificacionArticulo','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('clasificacion-articulo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Clasificacion Articulos</h3>

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
	'type'=>'striped bordered condensed hover',
	'id'=>'clasificacion-articulo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nu_clasificacion_articulo',
		'al_nombre_clasificacion',
		'al_descripcion_clasificacion',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
