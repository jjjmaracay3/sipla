

<h3>Administrar Solicitud</h3>

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

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	
	'type'=>'striped bordered condensed hover',
	'id'=>'solicitud-grid',
	'dataProvider'=>$model->search(),
	//filter'=>$model,
	'columns'=>array(
		//'nu_solicitud',
		'funcionario.username',
		'departamento.al_nombre_departamento',
		//'al_estado_solicitud',
		'fe_solicitud',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
