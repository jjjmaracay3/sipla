<?php
$this->breadcrumbs=array(
	'Nota Entregas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Nota de Entrega','url'=>array('index')),
	array('label'=>'Crear Nota de Entrega','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('nota-entrega-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Administrar Nota de Entregas</h3>

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
	'id'=>'nota-entrega-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nuFuncionario.username',
		'nu_nota',
		//'nu_solicitud',
		'fe_fecha_nota',
		//'nu_cantidad_entregada',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
