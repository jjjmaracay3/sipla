<?php
$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->nu_numero_departamento,
);

$this->menu=array(
	array('label'=>'Listar Departamento','url'=>array('index')),
	array('label'=>'Crear Departamento','url'=>array('create')),
	array('label'=>'Actualizar Departamento','url'=>array('update','id'=>$model->nu_numero_departamento)),
	array('label'=>'Eliminar Departamento','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->nu_numero_departamento),'confirm'=>'Esta seguro de eliminar este Departamento?')),
	array('label'=>'Administrar Departamento','url'=>array('admin')),
);
?>

<h3>Ver Departamento #<?php echo $model->nu_numero_departamento; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nu_numero_departamento',
		'al_nombre_departamento',
		'nu_tlf_departamento',
	),
)); ?>
