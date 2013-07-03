<?php
/* @var $this ModuloController */
/* @var $model Modulo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'modulo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_seccion'); ?>
		<?php echo $form->textField($model,'nu_seccion'); ?>
		<?php echo $form->error($model,'nu_seccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_nombre_modulo'); ?>
		<?php echo $form->textField($model,'al_nombre_modulo'); ?>
		<?php echo $form->error($model,'al_nombre_modulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_descripcion_modulo'); ?>
		<?php echo $form->textField($model,'al_descripcion_modulo'); ?>
		<?php echo $form->error($model,'al_descripcion_modulo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->