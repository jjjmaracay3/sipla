<?php
/* @var $this DepartamentoController */
/* @var $data Departamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_numero_departamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_numero_departamento), array('view', 'id'=>$data->nu_numero_departamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_nombre_departamento')); ?>:</b>
	<?php echo CHtml::encode($data->al_nombre_departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_tlf_departamento')); ?>:</b>
	<?php echo CHtml::encode($data->nu_tlf_departamento); ?>
	<br />


</div>