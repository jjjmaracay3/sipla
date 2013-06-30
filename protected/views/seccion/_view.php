<?php
/* @var $this SeccionController */
/* @var $data Seccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_seccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_seccion), array('view', 'id'=>$data->nu_seccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_nombre_seccion')); ?>:</b>
	<?php echo CHtml::encode($data->al_nombre_seccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_descripcion_modulo')); ?>:</b>
	<?php echo CHtml::encode($data->al_descripcion_modulo); ?>
	<br />


</div>