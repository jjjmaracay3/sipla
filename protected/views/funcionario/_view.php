<?php
/* @var $this FuncionarioController */
/* @var $data Funcionario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_funcionario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_funcionario), array('view', 'id'=>$data->nu_funcionario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_numero_departamento')); ?>:</b>
	<?php echo CHtml::encode($data->departamento->al_nombre_departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_rol')); ?>:</b>
	<?php echo CHtml::encode($data->rol->al_nombre_rol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_nombre_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->al_nombre_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_apellido_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->al_apellido_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_cedula_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->nu_cedula_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_cargo_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->al_cargo_funcionario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('al_correo_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->al_correo_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_usuario_login')); ?>:</b>
	<?php echo CHtml::encode($data->al_usuario_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_clave_login')); ?>:</b>
	<?php echo CHtml::encode($data->al_clave_login); ?>
	<br />

	*/ ?>

</div>