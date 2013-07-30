<?php
/* @var $this SolicitudController */
/* @var $data Solicitud */
?>


<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_solicitud')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->nu_solicitud), array('view', 'id'=>$data->nu_solicitud)); ?></b>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->funcionario->al_nombre_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_numero_departamento')); ?>:</b>
	<?php echo CHtml::encode($data->departamento->al_nombre_departamento); ?>
	<br />

	

	<b><?php  echo CHtml::encode($data->getAttributeLabel('Articulos')); ?>:</b>
	<?php 
	foreach ($data->detalle as $det) {
	echo '<br>'.$det->nu_cantidad_solicitada.' ';
	echo $det->nuArticulo->al_nombre_articulo.' ';
	} ?>
	

	<br/>
	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->fe_solicitud); ?>
	<br />


</div>