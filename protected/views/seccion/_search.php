<?php
/* @var $this SeccionController */
/* @var $model Seccion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_seccion'); ?>
		<?php echo $form->textField($model,'nu_seccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_nombre_seccion'); ?>
		<?php echo $form->textField($model,'al_nombre_seccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_descripcion_modulo'); ?>
		<?php echo $form->textField($model,'al_descripcion_modulo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->