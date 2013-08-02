<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_articulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_articulo),array('view','id'=>$data->nu_articulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_tipo_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->nuTipoArticulo->al_nombre_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_nombre_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->al_nombre_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_marca_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->al_marca_articulo); ?>
	<br />

	

</div>