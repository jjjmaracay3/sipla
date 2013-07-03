<?php
/* @var $this ModuloController */
/* @var $data Modulo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_modulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_modulo), array('view', 'id'=>$data->nu_modulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_seccion')); ?>:</b>
	<?php echo CHtml::encode($data->nu_seccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_nombre_modulo')); ?>:</b>
	<?php echo CHtml::encode($data->al_nombre_modulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_descripcion_modulo')); ?>:</b>
	<?php echo CHtml::encode($data->al_descripcion_modulo); ?>
	<br />


</div>