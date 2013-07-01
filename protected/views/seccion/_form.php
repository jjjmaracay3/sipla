<?php
/* @var $this SeccionController */
/* @var $model Seccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seccion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'al_nombre_seccion'); ?>
		<?php echo $form->textField($model,'al_nombre_seccion'); ?>
		<?php echo $form->error($model,'al_nombre_seccion'); ?>
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