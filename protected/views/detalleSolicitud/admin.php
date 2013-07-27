<?php
$this->breadcrumbs=array(
	'Detalle Solicituds'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DetalleSolicitud','url'=>array('index')),
	array('label'=>'Create DetalleSolicitud','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('detalle-solicitud-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Detalle Solicituds</h1>

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
	'id'=>'detalle-solicitud-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'nu_detalle_solicitud',
		'nu_solicitud',
		//'nu_clasificacion_articulo',
		//'nu_tipo_articulo',
		'nuArticulo.al_nombre_articulo',
		//'nu_articulo',
		'nu_cantidad_solicitada',
		/*
		'al_justificacion',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
