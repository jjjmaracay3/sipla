<?php
/* @var $this DetalleSolicitudController */
/* @var $model DetalleSolicitud */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detalle-solicitud-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_solicitud'); ?>
		<?php echo $form->textField($model,'nu_solicitud'); ?>
		<?php echo $form->error($model,'nu_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_articulo'); ?>
		<?php echo $form->textField($model,'nu_articulo'); ?>
		<?php echo $form->error($model,'nu_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_cantidad_solicitada'); ?>
		<?php echo $form->textField($model,'nu_cantidad_solicitada'); ?>
		<?php echo $form->error($model,'nu_cantidad_solicitada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_justificacion'); ?>
		<?php echo $form->textField($model,'al_justificacion'); ?>
		<?php echo $form->error($model,'al_justificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->