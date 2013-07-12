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
		<?php echo $form->dropdownList($model,'nu_numero_departamento',CHtml::listData(Departamento::model()->findAll(),
		'nu_numero_departamento','al_nombre_departamento'),array('empty'=>'Seleccione Departamento')); ?>
		<?php echo $form->error($model,'nu_numero_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_rol'); ?>
		<?php echo $form->dropdownList($model,'nu_rol',CHtml::listData(RolFuncionario::model()->findAll(),
		'nu_rol','al_nombre_rol'),array('empty'=>'Seleccione rol del funcionario')); ?>
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
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'session'); ?>
		<?php echo $form->textArea($model,'session',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'session'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->