<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */

$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->nu_numero_departamento=>array('view','id'=>$model->nu_numero_departamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Departamento', 'url'=>array('index')),
	array('label'=>'Create Departamento', 'url'=>array('create')),
	array('label'=>'View Departamento', 'url'=>array('view', 'id'=>$model->nu_numero_departamento)),
	array('label'=>'Manage Departamento', 'url'=>array('admin')),
);
?>

<h1>Update Departamento <?php echo $model->nu_numero_departamento; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>