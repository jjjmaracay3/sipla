<?php
/* @var $this ClasificacionArticuloController */
/* @var $model ClasificacionArticulo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clasificacion-articulo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'al_nombre_clasificacion'); ?>
		<?php echo $form->textField($model,'al_nombre_clasificacion'); ?>
		<?php echo $form->error($model,'al_nombre_clasificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_descripcion_clasificacion'); ?>
		<?php echo $form->textField($model,'al_descripcion_clasificacion'); ?>
		<?php echo $form->error($model,'al_descripcion_clasificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->