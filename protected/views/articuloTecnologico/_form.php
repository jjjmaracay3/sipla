<?php
/* @var $this ArticuloTecnologicoController */
/* @var $model ArticuloTecnologico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulo-tecnologico-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_tipo_articulo'); ?>
		<?php echo $form->textField($model,'nu_tipo_articulo'); ?>
		<?php echo $form->error($model,'nu_tipo_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_nombre_articulo'); ?>
		<?php echo $form->textField($model,'al_nombre_articulo'); ?>
		<?php echo $form->error($model,'al_nombre_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_marca_articulo'); ?>
		<?php echo $form->textField($model,'al_marca_articulo'); ?>
		<?php echo $form->error($model,'al_marca_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_modelo_articulo'); ?>
		<?php echo $form->textField($model,'al_modelo_articulo'); ?>
		<?php echo $form->error($model,'al_modelo_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_descripcion_articulo'); ?>
		<?php echo $form->textField($model,'al_descripcion_articulo'); ?>
		<?php echo $form->error($model,'al_descripcion_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'de_precio_unitario'); ?>
		<?php echo $form->textField($model,'de_precio_unitario'); ?>
		<?php echo $form->error($model,'de_precio_unitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_color_articulo'); ?>
		<?php echo $form->textField($model,'al_color_articulo'); ?>
		<?php echo $form->error($model,'al_color_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_unidad_medida'); ?>
		<?php echo $form->textField($model,'al_unidad_medida'); ?>
		<?php echo $form->error($model,'al_unidad_medida'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->