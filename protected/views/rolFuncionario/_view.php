<?php
/* @var $this RolFuncionarioController */
/* @var $data RolFuncionario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_rol')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_rol), array('view', 'id'=>$data->nu_rol)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_nombre_rol')); ?>:</b>
	<?php echo CHtml::encode($data->al_nombre_rol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_descipcion_rol')); ?>:</b>
	<?php echo CHtml::encode($data->al_descipcion_rol); ?>
	<br />


</div>