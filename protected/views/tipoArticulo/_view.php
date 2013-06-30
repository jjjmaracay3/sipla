<?php
/* @var $this TipoArticuloController */
/* @var $data TipoArticulo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_tipo_articulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_tipo_articulo), array('view', 'id'=>$data->nu_tipo_articulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_clasificacion_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->clasificacion->al_nombre_clasificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_nombre_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->al_nombre_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_descripcion_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->al_descripcion_tipo); ?>
	<br />


</div>