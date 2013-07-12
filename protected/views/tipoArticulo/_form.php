<?php
/* @var $this TipoArticuloController */
/* @var $model TipoArticulo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-articulo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_clasificacion_articulo'); ?>
		<?php echo $form->dropdownList($model,'nu_clasificacion_articulo',CHtml::listData(ClasificacionArticulo::model()->findAll(),
		'nu_clasificacion_articulo','al_nombre_clasificacion'),array('empty'=>'Seleccione Clase')); ?>
		<?php echo $form->error($model,'nu_clasificacion_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_nombre_tipo'); ?>
		<?php echo $form->textField($model,'al_nombre_tipo'); ?>
		<?php echo $form->error($model,'al_nombre_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_descripcion_tipo'); ?>
		<?php echo $form->textField($model,'al_descripcion_tipo'); ?>
		<?php echo $form->error($model,'al_descripcion_tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->