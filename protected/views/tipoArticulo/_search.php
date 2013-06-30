<?php
/* @var $this TipoArticuloController */
/* @var $model TipoArticulo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_tipo_articulo'); ?>
		<?php echo $form->textField($model,'nu_tipo_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_clasificacion_articulo'); ?>
		<?php echo $form->textField($model,'nu_clasificacion_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_nombre_tipo'); ?>
		<?php echo $form->textField($model,'al_nombre_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_descripcion_tipo'); ?>
		<?php echo $form->textField($model,'al_descripcion_tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->