<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'nota-entrega-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nu_solicitud',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fe_fecha_nota',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_cantidad_entregada',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
