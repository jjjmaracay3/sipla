<?php
$this->breadcrumbs=array(
	'Rol Funcionarios'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Rol del Funcionario','url'=>array('index')),
	array('label'=>'Create Rol del Funcionario','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rol-funcionario-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Rol Funcionarios</h1>

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
	'id'=>'rol-funcionario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nu_rol',
		'al_nombre_rol',
		'al_descipcion_rol',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
