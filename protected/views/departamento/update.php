<?php
$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->nu_numero_departamento=>array('view','id'=>$model->nu_numero_departamento),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Departamento','url'=>array('index')),
	array('label'=>'Crear Departamento','url'=>array('create')),
	array('label'=>'Ver Departamento','url'=>array('view','id'=>$model->nu_numero_departamento)),
	array('label'=>'Administrar Departamento','url'=>array('admin')),
);
?>

<h3>Actualizar Departamento <?php echo $model->nu_numero_departamento; ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
