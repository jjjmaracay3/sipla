<?php
/* @var $this RolFuncionarioController */
/* @var $model RolFuncionario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rol-funcionario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'al_nombre_rol'); ?>
		<?php echo $form->textField($model,'al_nombre_rol'); ?>
		<?php echo $form->error($model,'al_nombre_rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_descipcion_rol'); ?>
		<?php echo $form->textField($model,'al_descipcion_rol'); ?>
		<?php echo $form->error($model,'al_descipcion_rol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->