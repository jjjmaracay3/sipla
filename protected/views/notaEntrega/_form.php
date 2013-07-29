<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'nota-entrega-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?></p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nu_solicitud',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_funcionario',array('class'=>'span4')); ?>

	<?php echo $form->labelEx($model,'fe_fecha_nota');
		$this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
			'model'=>$model,
			'attribute'=>'fe_fecha_nota',
			'language' => 'es',
			'options' => array(
								'dateFormat'=>'yy-mm-dd',
								'constrainInput'=>'false',
								'duration'=>'fast',
								'showAnim'=>'slide',))); 

								?>
			

	<?php echo $form->textFieldRow($model,'nu_cantidad_entregada',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
