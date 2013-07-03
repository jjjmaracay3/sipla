<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'departamento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'al_nombre_departamento'); ?>
		<?php echo $form->textField($model,'al_nombre_departamento'); ?>
		<?php echo $form->error($model,'al_nombre_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_tlf_departamento'); ?>
		<?php echo $form->textField($model,'nu_tlf_departamento'); ?>
		<?php echo $form->error($model,'nu_tlf_departamento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->