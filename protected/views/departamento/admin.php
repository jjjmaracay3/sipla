<?php
$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Departamento','url'=>array('index')),
	array('label'=>'Create Departamento','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('departamento-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestione Departamentos</h1>

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
	'id'=>'departamento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nu_numero_departamento',
		'al_nombre_departamento',
		'nu_tlf_departamento',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
