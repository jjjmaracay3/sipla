<?php
/* @var $this DetalleSolicitudController */
/* @var $data DetalleSolicitud */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_detalle_solicitud')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_detalle_solicitud), array('view', 'id'=>$data->nu_detalle_solicitud)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->nu_solicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->articulo->al_nombre_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_cantidad_solicitada')); ?>:</b>
	<?php echo CHtml::encode($data->nu_cantidad_solicitada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_justificacion')); ?>:</b>
	<?php echo CHtml::encode($data->al_justificacion); ?>
	<br />


</div>