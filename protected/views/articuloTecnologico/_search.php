<?php
/* @var $this ArticuloTecnologicoController */
/* @var $model ArticuloTecnologico */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_articulo'); ?>
		<?php echo $form->textField($model,'nu_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_tipo_articulo'); ?>
		<?php echo $form->textField($model,'nu_tipo_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_nombre_articulo'); ?>
		<?php echo $form->textField($model,'al_nombre_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_descripcion_articulo'); ?>
		<?php echo $form->textField($model,'al_descripcion_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_marca_articulo'); ?>
		<?php echo $form->textField($model,'al_marca_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_modelo_articulo'); ?>
		<?php echo $form->textField($model,'al_modelo_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'de_precio_unitario'); ?>
		<?php echo $form->textField($model,'de_precio_unitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_color_articulo'); ?>
		<?php echo $form->textField($model,'al_color_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_unidad_medida'); ?>
		<?php echo $form->textField($model,'al_unidad_medida'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->