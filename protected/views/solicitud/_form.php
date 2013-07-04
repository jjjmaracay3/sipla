<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solicitud-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model,$modelb); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_funcionario'); ?>
		<?php echo $form->textField($model,'nu_funcionario'); ?>
		<?php echo $form->error($model,'nu_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_numero_departamento'); ?>
		<?php echo $form->textField($model,'nu_numero_departamento'); ?>
		<?php echo $form->error($model,'nu_numero_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_estado_solicitud'); ?>
		<?php echo $form->textField($model,'al_estado_solicitud'); ?>
		<?php echo $form->error($model,'al_estado_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fe_solicitud'); ?>
		<?php echo $form->textField($model,'fe_solicitud'); ?>
		<?php echo $form->error($model,'fe_solicitud'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($modelb,'nu_articulo'); ?>
		<?php echo $form->textField($modelb,'nu_articulo'); ?>
		<?php echo $form->error($modelb,'nu_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelb,'nu_cantidad_solicitada'); ?>
		<?php echo $form->textField($modelb,'nu_cantidad_solicitada'); ?>
		<?php echo $form->error($modelb,'nu_cantidad_solicitada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelb,'al_justificacion'); ?>
		<?php echo $form->textField($modelb,'al_justificacion'); ?>
		<?php echo $form->error($modelb,'al_justificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->