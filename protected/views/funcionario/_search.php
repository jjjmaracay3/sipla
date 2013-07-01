<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_funcionario'); ?>
		<?php echo $form->textField($model,'nu_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_numero_departamento'); ?>
		<?php echo $form->textField($model,'nu_numero_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_rol'); ?>
		<?php echo $form->textField($model,'nu_rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_nombre_funcionario'); ?>
		<?php echo $form->textField($model,'al_nombre_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_apellido_funcionario'); ?>
		<?php echo $form->textField($model,'al_apellido_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_cedula_funcionario'); ?>
		<?php echo $form->textField($model,'nu_cedula_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_cargo_funcionario'); ?>
		<?php echo $form->textField($model,'al_cargo_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_correo_funcionario'); ?>
		<?php echo $form->textField($model,'al_correo_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_usuario_login'); ?>
		<?php echo $form->textField($model,'al_usuario_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_clave_login'); ?>
		<?php echo $form->textField($model,'al_clave_login'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->