<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_solicitud'); ?>
		<?php echo $form->textField($model,'nu_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_funcionario'); ?>
		<?php echo $form->textField($model,'nu_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_numero_departamento'); ?>
		<?php echo $form->textField($model,'nu_numero_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_estado_solicitud'); ?>
		<?php echo $form->textField($model,'al_estado_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_solicitud'); ?>
		<?php echo $form->textField($model,'fe_solicitud'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
