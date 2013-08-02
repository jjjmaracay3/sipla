<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'nu_requisicion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_plan_compra',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_funcionario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fe_fecha_requisicion',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
