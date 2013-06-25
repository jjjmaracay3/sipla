<?php
/* @var $this RolFuncionarioController */
/* @var $model RolFuncionario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_rol'); ?>
		<?php echo $form->textField($model,'nu_rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_nombre_rol'); ?>
		<?php echo $form->textField($model,'al_nombre_rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_descipcion_rol'); ?>
		<?php echo $form->textField($model,'al_descipcion_rol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->