<?php
/* @var $this RolFuncionarioController */
/* @var $model RolFuncionario */

$this->breadcrumbs=array(
	'Rol Funcionarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RolFuncionario', 'url'=>array('index')),
	array('label'=>'Create RolFuncionario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rol-funcionario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Rol Funcionarios</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rol-funcionario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nu_rol',
		'al_nombre_rol',
		'al_descipcion_rol',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
