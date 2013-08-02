<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_requisicion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_requisicion),array('view','id'=>$data->nu_requisicion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_plan_compra')); ?>:</b>
	<?php echo CHtml::encode($data->nu_plan_compra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->nu_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_fecha_requisicion')); ?>:</b>
	<?php echo CHtml::encode($data->fe_fecha_requisicion); ?>
	<br />


</div>