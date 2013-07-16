<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_detalle_solicitud')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_detalle_solicitud),array('view','id'=>$data->nu_detalle_solicitud)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->nu_solicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_clasificacion_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->nu_clasificacion_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_tipo_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->nu_tipo_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->nu_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_cantidad_solicitada')); ?>:</b>
	<?php echo CHtml::encode($data->nu_cantidad_solicitada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_justificacion')); ?>:</b>
	<?php echo CHtml::encode($data->al_justificacion); ?>
	<br />


</div>