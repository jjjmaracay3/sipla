<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'detalle-solicitud-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nu_solicitud',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_clasificacion_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_tipo_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_cantidad_solicitada',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'al_justificacion',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
