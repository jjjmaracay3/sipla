<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'nu_nota',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_solicitud',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fe_fecha_nota',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_cantidad_entregada',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Buscar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
