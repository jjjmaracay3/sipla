<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funcionario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_numero_departamento'); ?>
		<?php echo $form->textField($model,'nu_numero_departamento'); ?>
		<?php echo $form->error($model,'nu_numero_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_rol'); ?>
		<?php echo $form->textField($model,'nu_rol'); ?>
		<?php echo $form->error($model,'nu_rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_nombre_funcionario'); ?>
		<?php echo $form->textField($model,'al_nombre_funcionario'); ?>
		<?php echo $form->error($model,'al_nombre_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_apellido_funcionario'); ?>
		<?php echo $form->textField($model,'al_apellido_funcionario'); ?>
		<?php echo $form->error($model,'al_apellido_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_cedula_funcionario'); ?>
		<?php echo $form->textField($model,'nu_cedula_funcionario'); ?>
		<?php echo $form->error($model,'nu_cedula_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_cargo_funcionario'); ?>
		<?php echo $form->textField($model,'al_cargo_funcionario'); ?>
		<?php echo $form->error($model,'al_cargo_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_correo_funcionario'); ?>
		<?php echo $form->textField($model,'al_correo_funcionario'); ?>
		<?php echo $form->error($model,'al_correo_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_usuario_login'); ?>
		<?php echo $form->textField($model,'al_usuario_login'); ?>
		<?php echo $form->error($model,'al_usuario_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_clave_login'); ?>
		<?php echo $form->textField($model,'al_clave_login'); ?>
		<?php echo $form->error($model,'al_clave_login'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->