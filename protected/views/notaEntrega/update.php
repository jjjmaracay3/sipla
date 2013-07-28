<?php
$this->breadcrumbs=array(
	'Nota Entregas'=>array('index'),
	$model->nu_nota=>array('view','id'=>$model->nu_nota),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Nota de Entrega','url'=>array('index')),
	array('label'=>'Crear Nota de Entrega','url'=>array('create')),
	array('label'=>'Ver Nota de Entrega','url'=>array('view','id'=>$model->nu_nota)),
	array('label'=>'Administrar Nota de Entrega','url'=>array('admin')),
);
?>

<h3>Actualizar Nota de Entrega <?php echo $model->nu_nota; ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
