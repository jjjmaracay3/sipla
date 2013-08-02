<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_plan_compra')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_plan_compra),array('view','id'=>$data->nu_plan_compra)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->nu_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_fecha_plan')); ?>:</b>
	<?php echo CHtml::encode($data->fe_fecha_plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_cantidad_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->nu_cantidad_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_cantidad_pendiente')); ?>:</b>
	<?php echo CHtml::encode($data->nu_cantidad_pendiente); ?>
	<br />


</div>