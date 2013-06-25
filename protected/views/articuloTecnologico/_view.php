<?php
/* @var $this ArticuloTecnologicoController */
/* @var $data ArticuloTecnologico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_articulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_articulo), array('view', 'id'=>$data->nu_articulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_tipo_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->nu_tipo_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_nombre_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->al_nombre_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_descripcion_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->al_descripcion_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_marca_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->al_marca_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_modelo_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->al_modelo_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('de_precio_unitario')); ?>:</b>
	<?php echo CHtml::encode($data->de_precio_unitario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('al_color_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->al_color_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_unidad_medida')); ?>:</b>
	<?php echo CHtml::encode($data->al_unidad_medida); ?>
	<br />

	*/ ?>

</div>