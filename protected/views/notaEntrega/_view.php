<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_nota')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_nota),array('view','id'=>$data->nu_nota)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->nu_solicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->nu_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_fecha_nota')); ?>:</b>
	<?php echo CHtml::encode($data->fe_fecha_nota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_cantidad_entregada')); ?>:</b>
	<?php echo CHtml::encode($data->nu_cantidad_entregada); ?>
	<br />


</div>