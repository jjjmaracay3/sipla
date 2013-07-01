<?php
/* @var $this DetalleSolicitudController */
/* @var $model DetalleSolicitud */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_detalle_solicitud'); ?>
		<?php echo $form->textField($model,'nu_detalle_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_solicitud'); ?>
		<?php echo $form->textField($model,'nu_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_articulo'); ?>
		<?php echo $form->textField($model,'nu_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_cantidad_solicitada'); ?>
		<?php echo $form->textField($model,'nu_cantidad_solicitada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_justificacion'); ?>
		<?php echo $form->textField($model,'al_justificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->