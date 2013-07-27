<?php
$this->breadcrumbs=array(
	'Nota Entregas'=>array('index'),
	$model->nu_nota=>array('view','id'=>$model->nu_nota),
	'Update',
);

$this->menu=array(
	array('label'=>'List NotaEntrega','url'=>array('index')),
	array('label'=>'Create NotaEntrega','url'=>array('create')),
	array('label'=>'View NotaEntrega','url'=>array('view','id'=>$model->nu_nota)),
	array('label'=>'Manage NotaEntrega','url'=>array('admin')),
);
?>

<h3>Update NotaEntrega <?php echo $model->nu_nota; ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>