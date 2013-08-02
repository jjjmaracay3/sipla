<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'nu_plan_compra',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fe_fecha_plan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_cantidad_articulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nu_cantidad_pendiente',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
