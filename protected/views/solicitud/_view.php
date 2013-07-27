<?php
/* @var $this SolicitudController */
/* @var $data Solicitud */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_solicitud')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nu_solicitud), array('view', 'id'=>$data->nu_solicitud)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->funcionario->al_nombre_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_numero_departamento')); ?>:</b>
	<?php echo CHtml::encode($data->departamento->al_nombre_departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_estado_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->al_estado_solicitud); ?>
	<br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Articulos')); ?>:</b>
	<?php 
	foreach ($data->detalle as $det) {
	echo '<br>'.$det->nu_cantidad_solicitada.'<br>';
	echo $det->nu_articulo.'<br>';
	} ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->fe_solicitud); ?>
	<br />


</div>