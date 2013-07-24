<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_clasificacion_articulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_clasificacion_articulo),array('view','id'=>$data->nu_clasificacion_articulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_nombre_clasificacion')); ?>:</b>
	<?php echo CHtml::encode($data->al_nombre_clasificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_descripcion_clasificacion')); ?>:</b>
	<?php echo CHtml::encode($data->al_descripcion_clasificacion); ?>
	<br />


</div>