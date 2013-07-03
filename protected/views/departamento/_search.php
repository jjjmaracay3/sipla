<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_numero_departamento'); ?>
		<?php echo $form->textField($model,'nu_numero_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_nombre_departamento'); ?>
		<?php echo $form->textField($model,'al_nombre_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_tlf_departamento'); ?>
		<?php echo $form->textField($model,'nu_tlf_departamento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->